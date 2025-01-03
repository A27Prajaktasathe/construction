<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "construction");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set default values for pagination, row limit, and search query
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;  // Default 10 rows per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;       // Default page 1
$offset = ($page - 1) * $limit;
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

// Fetch total number of rows with search filter
$totalResult = $conn->query("SELECT COUNT(*) AS total FROM products WHERE name LIKE '%$search%' OR description LIKE '%$search%'");
$totalRows = $totalResult->fetch_assoc()['total'];
$totalPages = ceil($totalRows / $limit);

// Fetch products with limit, offset, and search filter for pagination
$sql = "SELECT name, description, image FROM products 
        WHERE name LIKE '%$search%' OR description LIKE '%$search%' 
        ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        /* Sidebar styles */
        .sidebar {
            width: 200px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            height: 100vh;
            top: 0;
            left: 0;
        }

        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Main content styles */
        .main-content {
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
        }

        table {
            width: 100%;
        }

        .table-img {
            width: 100px;
            height: auto;
        }

        .form-inline {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 15px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                width: 100%;
                height: 100%;
                left: -100%;
                top: 0;
                z-index: 1050;
                background-color: #343a40;
                transition: left 0.3s ease;
            }

            .sidebar.open {
                left: 0;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .sidebar a {
                text-align: center;
                padding: 10px;
            }

            .form-inline {
                flex-direction: column;
                align-items: stretch;
            }

            .pagination {
                justify-content: flex-start;
            }

            /* Hamburger button */
            .sidebar-toggle-btn {
                display: block;
                font-size: 30px;
                cursor: pointer;
                position: absolute;
                top: 15px;
                left: 15px;
                z-index: 1060;
            }
        }
        }
    </style>
</head>

<body>
<?php include 'sidebar.php'; ?>
 <!-- sidebar toggle -->
 <div class="sidebar-toggle-btn" onclick="toggleSidebar()">
 &#9776;
</div>
<div class="main-content">
    <h2 class="my-4">Project List</h2>

    <!-- Search Form -->
    <form method="GET" class="form-inline mb-3 d-flex justify-content-end">
        <label for="limit" class="mr-2">Show</label>
        <select name="limit" id="limit" class="form-control form-control-sm" onchange="this.form.submit()" style="width: auto; max-width: 100px;">
            <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
            <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
            <option value="30" <?php if ($limit == 30) echo 'selected'; ?>>30</option>
        </select>

        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" class="form-control form-control-sm ml-2" placeholder="Search projects" style="width: 200px;">

        <button type="submit" class="btn btn-primary btn-sm ml-2" style="padding: 5px 10px;">Search</button>
    </form>

    <!-- Table with Projects -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Project Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                    echo "<td><img src='uploads/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='table-img'></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No projects found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination Links -->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                    <a class="page-link" href="?limit=<?php echo $limit; ?>&page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>
<script>
   function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('open');
}

</script>
<!-- Bootstrap JavaScript and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

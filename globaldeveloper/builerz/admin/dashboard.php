<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
            flex-grow: 1;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            transition: 0.3s;
        }

        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar a.active {
            background-color: green;
            font-weight: bold;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Mobile view adjustments */
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
    </style>
</head>
<body>
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- sidebar toggle -->
    <div class="sidebar-toggle-btn" onclick="toggleSidebar()">
    &#9776;
</div>
    <!-- Content -->
    <div class="content">
     
       
        
        <div class="container">
            <h1 class="my-4">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        </div>
    </div>

    <!-- Bootstrap JS, jQuery, and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('open');
    }
</script>
</body>
</html>

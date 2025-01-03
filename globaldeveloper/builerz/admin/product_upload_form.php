<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

// Check if a success message should be displayed
$showSuccessPopup = isset($_GET['success']) && $_GET['success'] == '1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sidebar Styling */
        body {
            display: flex;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .sidebar {
            min-width: 200px;
            max-width: 200px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
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
        .content {
            margin-left: 200px;
            padding: 20px;
            width: 100%;
        }
        /* Form Styling */
        form {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
        }
        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
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
    <!-- Content Area -->
    <div class="content">
    <h2 class="my-4">Upload Project</h2>
        
        <form action="upload_product.php" method="post" enctype="multipart/form-data">
            <label for="product_name">Project Name:</label>
            <input type="text" name="product_name" required>

            <label for="product_description">Description:</label>
            <textarea name="product_description" required></textarea>

            <label for="product_image">Project Image:</label>
            <input type="file" name="product_image" accept="image/*" required>

            <button type="submit">Upload Project</button>
        </form>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Product uploaded successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, jQuery, and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Display Success Modal if success parameter is present and redirect on close -->
    <script>
        <?php if ($showSuccessPopup): ?>
            $(document).ready(function() {
                // Show the success modal
                $('#successModal').modal('show');
                
                // Remove success parameter from URL after modal is shown
                window.history.replaceState(null, null, window.location.pathname);

                // Redirect to showproject.php after modal is closed
                $('#successModal').on('hidden.bs.modal', function () {
                    window.location.href = 'showproject.php';
                });
            });
        <?php endif; ?>
    </script>
    <script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('open');
    }
</script>
</body>
</html>

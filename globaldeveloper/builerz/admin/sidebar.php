<!-- Sidebar -->
<div class="sidebar">
    <h3 class="text-center">Menu</h3>
    <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </a>
    <a href="product_upload_form.php" class="<?= basename($_SERVER['PHP_SELF']) == 'product_upload_form.php' ? 'active' : ''; ?>">
        <i class="fas fa-upload"></i> Upload Project
    </a>
    <a href="showproject.php" class="<?= basename($_SERVER['PHP_SELF']) == 'showproject.php' ? 'active' : ''; ?>">
        <i class="fas fa-eye"></i> Show Project
    </a>
    <a href="logout.php" class="<?= basename($_SERVER['PHP_SELF']) == 'logout.php' ? 'active' : ''; ?>">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</div>

<!-- Sidebar CSS -->
<style>
    /* Sidebar styles */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        background-color: #343a40;
        color: white;
        padding-top: 20px;
    }

    .sidebar h3 {
        text-align: center;
        color: white;
        margin-bottom: 30px;
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
        background-color: green; /* Blue background for active link */
        font-weight: bold; /* Bold text for active link */
    }

    .sidebar a i {
        margin-right: 10px;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            left: -100%;
            transition: 0.3s;
        }

        .sidebar.active {
            left: 0;
        }

        .content {
            margin-left: 0;
        }
    }
</style>

<!-- Include Font Awesome for Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

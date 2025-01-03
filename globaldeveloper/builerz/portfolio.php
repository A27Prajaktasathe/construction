<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "construction");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT name, description, image FROM products ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themewagon.github.io/builerz/portfolio.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2024 10:59:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Global Group Builders & Developers</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.html" rel="icon">

        <!-- Google Font -->
        <link href="../../fonts.googleapis.com/css283ac.css?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="../../stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            .portfolio-img {
    width: 100%; /* Full width of the parent */
    height: 400px; /* Set a fixed height */
    overflow: hidden; /* Hide overflow for uniformity */
}

.portfolio-img img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the container without distortion */
}
</style>
<style>
            .logo {
    position: relative;
    display: flex;
    align-items: center;
}

.logo-img {
    position: absolute;
    left: 0; /* Ensures it's at the left corner */
    width: 60px;
    height: auto;
    margin-right: 10px;
    margin-top: 20px;
}

.logo h1 {
    margin-left: 60px; /* Adds space to align text beside the logo */
    font-size: 24px; /* Adjust as needed */
}
        </style>
    </head>

    <body>
  

        <div class="wrapper">
            <!-- Top Bar Start -->
             <div class="top-bar">
             <img src="img/logo.jpeg" alt="Logo" class="logo-img">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index-2.html">
                                    <h1>Global Group Builders & Developers</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                             
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+91 9820060496</p>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>vistacorner786@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-address"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Adderss</h3>
                                            <p>Shop No 38/39, Akshar Geomatrix Building, Sector: 25, Kamothe 410209</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index-2.html" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="team.html" class="nav-item nav-link">Team</a>
                                <a href="portfolio.php" class="nav-item nav-link active">Project</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="promises.html" class="dropdown-item">Promises</a>
                                        <a href="achivement.html" class="dropdown-item">Achivement</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="admin/login.php">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Projects</h2>
                        </div>
                        <div class="col-12">
                            <a href="#">Home</a>
                            <a href="#">Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Projects</p>
                        <h2>Visit Our Projects</h2>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".first">Complete</li>
                                <li data-filter=".second">Running</li>
                                <li data-filter=".third">Upcoming</li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="row">
                    <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp' data-wow-delay='0.1s'>";
                        echo "<div class='portfolio-warp'>";
                        echo "<div class='portfolio-img'>";
                        echo "<img src='admin/uploads/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
                        echo "<div class='portfolio-overlay'>";
                        echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='portfolio-text'>";
                        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                        echo "<a class='btn' href='admin/uploads/" . htmlspecialchars($row['image']) . "' data-lightbox='portfolio'>+</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No projects found.</p>";
                }
                ?>
                </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio End -->


            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Business Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Global Group Builders & Developers, Shop No 38/39, Akshar Geomatrix Building, Sector: 25, Kamothe 410209</p>
                                <p><i class="fa fa-phone-alt"></i>+91 9820060496</p>
                                <p><i class="fa fa-envelope"></i>vistacorner786@gmail.com</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="service.html">Residential Construction Services</a>
                                <a href="service.html">Commercial Construction Services</a>
                                <a href="service.html">Project Management & Consulting</a>
                                <a href="service.html">Infrastructure Development</a>
                                <a href="service.html">Interior Design and Fit-Out Services</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.html">About Us</a>
                                <a href="contact.html">Contact Us</a>
                                <a href="team.html">Our Team</a>
                                <a href="portfolio.php">Projects</a>
                                <a href="promises.html">Testimonial</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h2>Location</h2>
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3772.2299939778623!2d73.09713367520366!3d19.009584382181416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDAwJzM0LjUiTiA3M8KwMDUnNTkuMCJF!5e0!3m2!1sen!2sin!4v1731402974292!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                            
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy policy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                        <a href="#">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            Copyright &copy; 2024 
            <a href="https://absoftwaresolution.co.in/" target="_blank" class="text-primary">AB Software Solution</a> 
            All Rights Reserved.
        </div>
    </div>
</div>

            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="../../code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="../../stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themewagon.github.io/builerz/portfolio.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2024 10:59:40 GMT -->
</html>

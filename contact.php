<!DOCTYPE html>
<html lang="end">

<head>
    <title>Bhatt'sLab</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Boto Photo Studio HTML Template" />
    <meta name="keywords" content="photo, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section -->
    <!-- Header Section -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 order-2 order-sm-1"></div>
                <div class="col-sm-4 col-md-6 order-1 order-md-2 text-center">
                    <a href="./index.html" class="site-logo">
                        <div class="logo">
                            <img src="img/logo.png" alt="" />
                        </div>
                    </a>
                </div>
            </div>
            <nav class="main__menu">
                <ul class="nav__menu">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./gallery.html">Gallery</a></li>
                    <li><a href="./service.html">Service</a></li>
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./contact.html" class="menu--active">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header Section end -->

    <!-- Contact Page -->
    <section class="contact__page">
        <div class="contact__warp">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Me</h2>
                    <div class="contact__social">
                        <a href="https://instagram.com/________b__h__a__t__t________ ?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/BHATTz" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://linkedin.com/in/sarthak-bhatt-09" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact__text">
                        <p>Phone: +91 9023397247</p>
                        <p>Email: sarthakbhatt0@gmail.com</p>
                        <p>Address: #45 MDC Sec-4 Panchkula, Haryana, India</p>
                    </div>
                </div>
            </div>
            <form class="contact__form" action="demo.php" method="POST">
                <input type="text" placeholder="Name" name="name" required />
                <input type="email" placeholder="Email" name="email" autocomplete="off" required />
                <input type="text" placeholder="Phone" name="phone" required />
                <textarea placeholder="Message" name="message" required></textarea>
                <button class="site-btn" value="submit" name="submit">Send Message</button>
            </form>
        </div>
    </section>
    <?php
    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Message = $_POST['message'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'cont';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = "INSERT INTO contact(Name,Email,Phone,Message) values ('$Name','$Email','$Phone','$Message')";
        mysqli_query($conn, $sql);
    }
    ?>

    <!-- Contact Page end -->

    <!-- Socialmedia Links -->
    <div class="header__social">
        <a href="https://instagram.com/________b__h__a__t__t________ ?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="https://github.com/BHATTz" target="_blank"><i class="fa fa-github fa-2x"></i></a>
        <a href="https://linkedin.com/in/sarthak-bhatt-09" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
    </div>
    <!-- Socialmedia Links end -->

    <!-- Footer Section -->
    <footer class="footer__section">
        <div class="container">
            <div class="footer__copyright__text">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved |
                    <a href="#" target="_blank">Bhatt'sLab</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
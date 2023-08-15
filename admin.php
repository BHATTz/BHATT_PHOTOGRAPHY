<?php require("login_db.php")?>
<!DOCTYPE html>
<html lang="end">

<head>
    <title>Bhatt'sLab</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Bhatt's Photography" />
    <meta name="keywords" content="photo, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/fresco.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/admin.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                    <li><a href="./index.html" class="menu--active">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./gallery.html">Gallery</a></li>
                    <li><a href="./service.html">Service</a></li>
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header Section end -->

    <!-- FORM -->
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-8 col-md-2 offset-lg-2 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Login</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                            <br>
                            <div class="form-group py-2">
                                <div class="input-field"><input type="text" placeholder="Username or Email" name="name" required> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"><input type="password" placeholder="Enter your Password" name="pass" required></button>
                                </div>
                            </div>
                            <center>
                                <button name= "login" style="background-color: darkgray;">Log in</button>
                                </center>
                        </form>
                    </div>
                </div>
                <br> <br>
            </div>
        </div>
    </div>
    <!-- FORM end -->

  <!-- PHP -->
  
  <?php

function input_filter($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

  if(isset($_POST['login'])){
   $name=input_filter($_POST['name']);
   $pass=input_filter($_POST['pass']);

   $name=mysqli_real_escape_string($con,$name);
   $pass=mysqli_real_escape_string($con,$pass);

$query="SELECT * FROM `admin_login` WHERE `name`=? AND `pass`=?";

if($stmt=mysqli_prepare($con,$query))
{
mysqli_stmt_bind_param($stmt,"ss",$name,$pass);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
if(mysqli_stmt_num_rows($stmt)==1){
    session_start();
    $_SESSION['loginId']=$name;
    header("location: adminpannel.php");
}
else{
    echo"<script>alert('INVALID USERNAME AND PASSWORD');</script>";
}
mysqli_stmt_close($stmt);
}
else{
    echo"<script>alert('NOT PREPARED');</script>";
}

  }
  ?>

  <!-- PHP end -->

    <!-- Socialmedia Links -->
    <div class="header__social">
        <a href="https://instagram.com/________b__h__a__t__t________ ?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram fa-2x"></i
      ></a>
        <a href="https://github.com/BHATTz" target="_blank"><i class="fa fa-github fa-2x"></i
      ></a>
        <a href="https://linkedin.com/in/sarthak-bhatt-09" target="_blank"><i class="fa fa-linkedin fa-2x"></i
      ></a>
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
    <script src="js/fresco.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
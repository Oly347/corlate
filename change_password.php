<?php

include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();

if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    
} 
elseif (isset($_SESSION['forget_login']) && $_SESSION['forget_login'] ==true) {

$_GET['id']= $_SESSION['user_name'];
}

else{

header('Location:user_login.php');

}




$obj_user = new user_inc ;




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->


<body>

    <header id="header">
    <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +0123 456 70 90</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <!-- <li><a class="btn-slide animation animated-item-3" href="#">Learn More</a><li> -->
                            </ul>
                            <div class="search">
                            <!-- <a href="#" class="btn btn-primary  active" role="button" aria-pressed="true">Primary link</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12" >
                        <div class="top-number " style="float:right">


                        <?php
                        if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
                            echo '<a href="logout.php" class="btn btn-info   active" role="button" aria-pressed="true">Logout</a>';
                        } else {
                            echo '<a href="user_login.php" class="btn btn-info  active" role="button" aria-pressed="true">Login</a>';
                        }
                        ?>
                        <!-- <a href="#" class="btn btn-primary   active" role="button" aria-pressed="true">Primary link</a> -->
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        <!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" width="160"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="#">Assemble PC</a></li>
                        <li ><a href="smart_home_security.php">Smart Home security</a></li>
                        <li><a href="#">Make your Home smart</a></li>
                        <li><a href="#">Contact</a></li>
                        
                    </ul>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>User Login</h1>
    </div>
    
    <section class="pricing">
    <div class="login-card" >
        <p class="profile-name-card"> </p>
        <form name="my-form" class="form-signin" onsubmit="return validform()" action = "password.upl.php" method = "post" enctype="multipart/form-data"><span class="reauth-email"> </span>
        <input class="form-control" type="password"  id="password" name="password" placeholder="New Password" >
        <input type="hidden" name="user_id"  class="form-control" value="<?php echo $_GET['id']; ?>">
        <input class="form-control" type="text" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
       
    <button type="submit" class="btn btn-success btn-outline" >
                                       Chnage Password
                                        </button>
    
  </form>
  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</div>
    </section>

    
    <!--/#bottom-->

    <script>
        

        function validform() {
        
        var a = document.forms["my-form"]["password"].value;
        var b = document.forms["my-form"]["confirm_password"].value;
        
        
        
        if (a==null || a=="")
        {
            sweetAlert("Oops...", "Please enter Password!", "error");
            return false;
        }else if (b==null || b=="")
        {
        sweetAlert("Oops...", "Please enter your Confirm Password!", "error");
            return false;
        }else if (a!=b)
        {
            sweetAlert("Oops...", "Password Didn't Match", "error");
            return false;
        }
        
        }
        
        </script>

<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a  href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><b>Tilottama.Tech</b></a> All Rights Reserved
                    | Developed By <a  href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><i>Tilottama.Online</i></a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
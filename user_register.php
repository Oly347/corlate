<?php


include ('admin/system/database.php');
include ('admin/employee.cls.php');

require_once "config_g.php";
$obj_user = new user_inc;
$loginURL = $gClient->createAuthUrl();

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
    <link href="css/style_edit.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
   
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
    body {
overflow-x: hidden;
}  


    </style>
</head>
<!--/head-->


<body>

<header id="header">


    <?php require('topbar.php'); ?>
         
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
                    <a class="navbar-brand" href="index.php"><img src="images/tech-logo-for-dark.png" alt="logo" width="130" style="margin-top: -20px;margin-bottom: 5px;" ></a>
                </div>

                <div class="collapse navbar-collapse navbar-right" style="margin-top: 40px;"> 
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        
                        <li><a href="services.php">Assemble Your PC</a></li>
                        <li><a href="product_pc.php">Buy A PC</a></li>
                        <li><a href="smart_security_home.php">Smart Home Security</a></li>
                        <li><a href="smart_home.php">Make Your Home Smart</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="blog.html">Blog</a></li> -->
                        <!-- <li><a href="contact-us.php">Contact</a></li> -->
                       
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>User Register</h1>
    </div>
    
    
    <section class=" user_reguster">
    <div class="cotainer">
        
        <div class="row justify-content-center ">

        
            <div class="col-md-6 col-md-offset-3 edit_register_div" style="padding: 40px;">
                    <div class="card">
                        
                        <div class="card-body">

                        <div class="form-actions" style="margin-bottom:20px">
                        <a href="#"  class="btn btn-primary"><i class="fa fa-facebook"></i> Signup With Facebook 
</a>
                                        <a href="#"  class="btn btn-danger" onclick="window.location = '<?php echo $loginURL ?>';" > <i class="fa fa-google"></i> Signup With google 
</a>
</div>
                            <form name="my-form" onsubmit="return validform()" action="user.dml.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone_number">
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                    <textarea id="permanent_address" class="form-control" name="permanent_address"></textarea>
                                    </div>
                                </div>


                               
                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                    <img id="blah" src="images/no-image-icon-23494.png" style="box-sizing: content-box; 
        width: 150px; height: 200px; align-content: center; border: 1px;">

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="profile_pic" class="col-md-4 col-form-label text-md-right">Profile Picture</label>
                                    <div class="upload-btn-wrapper">
  <button class="btn edit_button">Upload Profile Picture</button>
  <input type="file" name="profile_pic" id="profile_pic" onchange="readURL(this);"/>
</div>
                                </div>
<style>
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.edit_button {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
                                

                                
<div class="form-actions">
                                        <button type="submit" class="btn btn-success btn-outline" >
                                        Register <i class="fa fa-sign-in"></i>
                                        </button>
                                        <a href="user_login.php"  class="btn btn-warning btn-outline">I have an account <i class="fa fa-user"></i></i>
</a>
</div>
                                        
                                    
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
                    </section>
                    <script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<style>
        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }
        </style>
    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.php" class="footer-logo">
                        <img src="images/tech_logo_dark.jpg" alt="logo" width="100">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="widget">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="about-us.php">About us</a></li>
                                    <!-- <li><a href="#">We are hiring</a></li> -->
                                    <!-- <li><a href="#">Meet the team</a></li> -->
                                    <!-- <li><a href="#">Copyright</a></li> -->
                                    <li><a href="terms_and_conditions.php">Terms of use</a></li>
                                    <li><a href="privacy_policy.php">Privacy policy</a></li>
                                    <li><a href="contact-us.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-4 col-sm-4">
                            <div class="widget">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="faq.php">Faq</a></li>
                                    <!-- <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Documentation</a></li> -->
                                    <li><a href="refund_policy.php">Refund policy</a></li>
                                    <li><a href="#">Enquery</a></li>
                                    <li><a href="main_services">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <!-- <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Developers</h3>
                                <ul>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">SEO Marketing</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Email Marketing</a></li>
                                    <li><a href="#">Plugin Development</a></li>
                                    <li><a href="#">Article Writing</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!--/.col-md-3-->

                        <div class="col-md-4 col-sm-4">
                            <div class="widget">
                                <h3>Our Partners</h3>
                                <ul>
                                    <li><a href="#">DELL</a></li>
                                    <li><a href="#">Amazon</a></li>
                                    <li><a href="#">Intel</a></li>
                                    <li><a href="#">Tp-LinK</a></li>
                                    <!-- <li><a href="#">Exercitation</a></li>
                                    <li><a href="#">Ullamco</a></li>
                                    <li><a href="#">Laboris</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
    <?php require('footer.php'); ?>
    </footer>
    <!--/#footer-->
    <script>
        

        function validform() {
        
        var a = document.forms["my-form"]["full_name"].value;
        var b = document.forms["my-form"]["email_address"].value;
        var c = document.forms["my-form"]["password"].value;
        var d = document.forms["my-form"]["phone_number"].value;
        var e = document.forms["my-form"]["permanent_address"].value;
        var f = document.forms["my-form"]["profile_pic"].value;
        
        
        
        if (a==null || a=="")
        {
            sweetAlert("Oops...", "Please enter your Name!", "error");
            return false;
        }else if (b==null || b=="")
        {
            sweetAlert("Oops...", "Please enter your Email Id!", "error");
            return false;
        }else if (c==null || c=="")
        {
            sweetAlert("Oops...", "Please enter your Password", "error");
            return false;
        }else if (d==null || d=="")
        {
            sweetAlert("Oops...", "Please enter your Phone number!", "error");
            return false;
        }else if (e==null || e=="")
        {
            sweetAlert("Oops...", "Please enter your Address!", "error");
            return false;
        }else if (f==null || f=="")
        {
            sweetAlert("Oops...", "Please Upload Profile picture", "error");
            return false;
        }
        
        }
        
        </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    
</body>

</html>
<?php
include ('admin/system/database.php');
include ('admin/employee.cls.php');


$obj_emp = new employee_inc ;

session_start();
if (!isset($_SESSION['user']))
{
 if(!isset($_SESSION['temp_user']))
 {
   $obj_emp = new employee_inc ;

  $insert_array=  array(
    'login_time' => date('Y-m-d'),
   );
    

$insert= $obj_emp->InsertIntotempUser($insert_array);


$_SESSION['temp_user'] = $insert;
$_SESSION['userName']= "Guest";







}
}


$obj_user = new user_inc ;

// $userReview = $obj_user->getReviewList();

// print_r($userReview);
// exit;





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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
                        <li ><a href="index.php">Home</a></li>
                        
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

    </header>
    <!--/header-->
    
    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>About us</h1>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="images/about-img01.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Who we are</h2>
                        <p style="text-align:justify">Tilottama Tech is first of its kind. We believe in technology as much as we love artificial intelligence. We offer service like custom PC Assembling by yourself. You will choose every part of your PC and we will assemble it at your place in front of you. We also offer Smart Home Security service in which we install and integrate Smart Home Security Devices in your home to make it secure and smart. We also offer Smart Home service where we install smart devices all over your place so that you don't have to press any switch again. your voice will work. From Televisions to Water Heaters to Room Lights, everything will automatically work on your voice. We offer these Great Services that no one does in our City. Come and experience our service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="about-us">
        <div class="container">
            <div class="row">
            <div class="col-md-5">
                    <div class="about-content">
                        <h2>What we are</h2>
                        <p style="text-align:justify">Tilottama Tech is first of its kind. We believe in technology as much as we love artificial intelligence. We offer service like custom PC Assembling by yourself. You will choose every part of your PC and we will assemble it at your place in front of you. We also offer Smart Home Security service in which we install and integrate Smart Home Security Devices in your home to make it secure and smart. We also offer Smart Home service where we install smart devices all over your place so that you don't have to press any switch again. your voice will work. From Televisions to Water Heaters to Room Lights, everything will automatically work on your voice. We offer these Great Services that no one does in our City. Come and experience our service.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-img1">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Why we are</h2>
                        <p>Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy. It surely seems old fashioned to talk about 35mm film and non-digital cameras in today’s day and age.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <!--/#middle-->
    
    <section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">From custom assembled PC to making your home smart, we provide best in class services in all these fields.</p>
            </div>
            <div class="row">
                <!-- <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team1.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Jeffery Poole</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team2.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Isabelle Dean</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team3.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mike Kennedy</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team5.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Custom PC Assemble</h4>
                            <span class="desg">Buy PC & Accessories  </span>
                            <!-- <div class="team-social">
                                <a class="fa fa-shopping-cart" href="#"></a>
                                <a class="fa fa-plus" href="#"></a>
                                <a class="fa fa-phone" href="#"></a>
                                
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Your Smart Home</h4>
                            <span class="desg">Smart Home Configuration</span>
                            <!-- <div class="team-social">
                            <a class="fa fa-shopping-cart" href="#"></a>
                                <a class="fa fa-plus" href="#"></a>
                                <a class="fa fa-phone" href="#"></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team6.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Smart Home security</h4>
                            <span class="desg">Install Home Security</span>
                            <!-- <div class="team-social">
                            <a class="fa fa-shopping-cart" href="#"></a>
                                <a class="fa fa-plus" href="#"></a>
                                <a class="fa fa-phone" href="#"></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                    <li><a href="request_pc.php">Enquery</a></li>
                                    <li><a href="main_services.php">Services</a></li>
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


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


<?php


session_start();
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style_edit.css" rel="stylesheet">
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
                            echo '<a href="logout.php" class="btn btn-imfo   active" role="button" aria-pressed="true">Logout</a>';
                            echo   $_SESSION['userName'];
                            echo '<a href="user_dashboard.php" class="btn btn-imfo   active" role="button" aria-pressed="true">Dash Board</a>';
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
                    <a class="navbar-brand" href="index.php"><img src="images/tech-logo-for-dark.png" alt="logo" width="150" style="margin-top: -22px;" ></a>
                </div>

                <div class="collapse navbar-collapse navbar-right" style="margin-top: 40px;"> 
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Assemble PC</a></li>
                        <li class="active"><a href="smart_security_home.php">Smart Home security</a></li>
                        <li><a href="smart_home.php">Make your Home smart</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="blog.html">Blog</a></li> -->
                        <li><a href="contact-us.php">Contact</a></li>
                       
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->


    <div class="page-title edit_page_title" style="background-image: url(images/slider/dan-lefebvre-1237718-unsplash.jpg)">
        <h1>Smart Home security</h1>
    </div>
    
    

    <section id="about-us">
        <div class="container">

        <div class="center fadeInDown">
                <h2>Security just got smarter</h2>
                <p class="lead">Our all-in-one system with facial recognition* and Amazon Alexa™ built in sends smart alerts to your mobile device. <br> Easy to set up and use, it grows with your needs thanks to a range of sensors and services.</p>
        </div>


        <div class="row ">
        <div class="center fadeInDown">
            <h1><i class="fa fa-video-camera" aria-hidden="true"></i>
</h1>
                <h2>Smart Home Security</h2>
               
            </div>
                <div class="col-md-7">
                
                <div class="about-content edit_home_icon">
                    
                        <p>
<b><i class="fas fa-shield-alt"></i>&nbsp;&nbsp;All-in-One Do-it-Yourself Home Security</b><br>
Simple to set up and use, it can change modes automatically as you come and go.<br><br>
<b><i class="fas fa-video-camera"></i>&nbsp;&nbsp;Senses Motion & Sound, Captures & Sends HD Video</b><br>
Stays alert day or night with smart motion detection and night vision all recorded in crisp 1080p HD video, with full audio.<br><br>
<b><i class="fa fa-camera-retro"></i>&nbsp;&nbsp;Scheduled Facial Recognition*</b><br>
Can recognize familiar faces to notify you if they arrive home when expected. If it sees someone it doesn’t know, you’ll get an alert on your phone to see a video clip of who’s there.<br><br>
<b><i class="fas fa-comments"></i>&nbsp;&nbsp;Amazon Alexa & Voice Control Built In</b><br>
Change modes with your voice, and talk to built-in Amazon Alexa to check the weather, ask questions, control other devices, and more.<br><br>
<b><i class="fas fa-home"></i>&nbsp;&nbsp;Smart Home Integration</b><br>
It’s easy to connect compatible smart devices and services. When used with Outdoor MotionViewers™ your system can even use sounds and Z-Wave lights to deter intruders. </p>
                    </div>
                </div>
                
                <div class="col-md-5">
                <div class="about-img">
                        <img src="images/Camera_Base_Station.jpg" alt="">
                    </div>
                </div>
            </div>
        
        </div><!--/#container-->
    </section>
    
    <!--/#blog-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
                <h1><i class="fas fa-cog"></i></h1>
                <h2>Accessories</h2>
               
            </div>


            <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">ALL</a></li>
                <li><a class="btn btn-default " href="#" data-filter=".indore">Indoor MotionViewer™</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".outdore">Outdoor MotionViewer™</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".motion">Motion Sensor</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".access">Access Sensor</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".web">Web Key Fob</a></li>
            </ul>
            <!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla indore col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/1.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item outdore col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/2.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/2.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item  motion  col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/3.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/3.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item  access col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/4.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/4.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item web  col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/5.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    
                    <!--/.portfolio-item-->

                    
                    <!--/.portfolio-item-->

                    
                    <!--/.portfolio-item-->
                </div>
            </div>

            <div class="center">
                <img  src="images/portfolio/6.png" alt="" height="55" width="54" >
                <h2>Scheduled Facial Recognition*</h2>
                <p class="lead">Wondering if someone has come home when they were expected can be <br> worrying. With the free Scheduled Facial Recognition service, Smart <br>Home Security can simply let you know. It can even tell you if someone<br>unrecognized is with them and send you a clip, so you can see exactly who it is.</p>
            
                <a href="#" class="btn btn-info btn-lg " role="button" aria-disabled="true">Learn More</a>
                <img class="img-responsive face_rec_img" src="images/portfolio/FACIAL_RECOGNITION_MAIN.jpg" alt="">
            </div>
        </div>
    </section>




    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/about-img1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>Security you control with your voice</h2>
                        <p>Change your system’s mode with simple voice commands. Or ask built-in Amazon Alexa to switch on a lamp, turn up the thermostat, or dim the lights – without lifting a finger.</p>
                    </div>
                </div>
            </div>

            <div class="row row1">
                <div class="col-md-6">
                <div class="about-content">
                        <h2>Deter unwanted visitors</h2>
                        <p>When combined with Outdoor MotionViewers™, your Smart Home Security system can help keep unwanted visitors away by working with your other smart devices to simulate an occupied home. The system can turn on compatible lights, and the 90-decibel internal speaker can play sounds like a barking dog, to make any potential intruder think twice</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/about-img2.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="row row1 edit_row1">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/about-img3.jpg" alt="" height="500">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>Control with Your app</h2>
                        <p>Our intuitive app makes it quick and easy to get alerts and view clips. Geofencing based control switches between home and away modes automatically as you come and go so you don’t have to worry about forgetting to turn on the alarm when you’ve left the house. Plus it lets you control all your other smart Honeywell devices too.</p>
                    </div>
                </div>
            </div>
            <div class="row row1">
                <div class="col-md-6">
                <div class="about-content">
                        <h2>Security for your data and your home</h2>
                        <p>We take your privacy seriously, so our system comes with:<br><br>

24 hours of free secure cloud storage – or more with a Membership Plan<br>
Protection by military grade encryption<br>
Honeywell Secure WiseLink™ Protocol<br><br>

View, save, and share clips safely, and know that when you’re home you can twist the cap for some added privacy.</p>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="about-img">
                        <img src="images/about-img4.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row row1 edit_row1">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/about-img5.png" alt="" height="500">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>Simple to install yourself</h2>
                        <p>Easy to set up and keep watch from anywhere. The in-app process makes it simple to install it yourself, with no complicated wiring, and the accessories are powered by batteries that can last up to two years</p>
                    </div>
                </div>
            </div>
            <div class="row row1">
                <div class="col-md-6">
                <div class="about-content">
                        <h2>A Day in the Life</h2>
                        <h4>Rest easy through the night </h4>
                        <p>WeIn this mode, opening a window will trigger an alarm and opening a door will start the Entry Countdown. However, motion sensors are disabled, so don’t worry if you’re partial to a midnight snack.</p>
                    
                        <h2><i class="fa fa-clock-o" aria-hidden="true"></i>
                           6:30AM</h2>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="about-img">
                        <img src="images/about-img6.jpg" alt="" >
                    </div>
                </div>
            </div>


            <div class="center contact_button_chat">
                <img  src="images/portfolio/7.png" alt="" height="100"  >
                <h2>For Configuration Please contact us</h2>
                
            
                <a href="#" class="btn btn-info btn-lg " role="button" aria-disabled="true">Contact us</a>
                
            </div>
        </div>
    </section>
    <section id="contact_section">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="partners">
                <ul>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/brand-1.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/brand-2.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/brand-3.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/brand-4.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/brand-5.png"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container-->
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
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a  href="index.php" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><b>Tilottama.Tech</b></a> All Rights Reserved
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

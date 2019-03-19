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

$userReview = $obj_user->getReviewListFinal();

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
    <title>Tilottama.Tech - One stop solution for your Smart Home & PC</title>

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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="homepage">

<!-- <div id="preloader">
  <div id="status"></div>
</div>
<script>
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})
    </script> -->

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
                        <li class="active"><a href="index.php">Home</a></li>
                        
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
<!--  -->



    <section id="main-slider" class="no-margin">
        <div class="carousel slide"  data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/smart-security.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Smart Home <span class="edit_heading"> Security</span></h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/assemble.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Custom<span class="edit_heading1"> Assemble</span> your personal computer</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/smart-home.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Make Your Home <span class="edit_heading">Smart</span></h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>We offer</h2>
                <p class="lead">A fully customised interface to assemble your Personal Computer Unit. We also provide Smart Home  <br> Security & Smart Home features with appliances and service. We are here to make your Home <br> Smart, Secure & Efficient.</p>
            </div>

            <div class="row">
                <div class="features">

                <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h2>Cheap</h2>
                            <p>Our services & products are not only cheap, but also premium in class.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h2>Smart</h2>
                            <p>Be it a responsibility of a PC or you Home, we'll make it smart for sure.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h2>Easy</h2>
                            <p>Assembling your PC was never like that easy before.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                            <i class="fa fa-edit"></i>
                            </div>
                            <h2>Customizable</h2>
                            <p>We have taken the word Customisable to a new height, just check our PC assembling page.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Smart Gadgets We Use</h2>
                <p class="lead">We use the best smart gadgets from the world renowned companies such as Amazon or Google. <br> We integrate all the smart appliances to your home such a way that you will never have to press a switch again.</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                       <img class="img-responsive" src="images/portfolio/a.jpg"  alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                            <p>Google Home</p>
                                <a title="Google Home" class="preview" href="images/portfolio/a.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/b.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                            <p>Amazon Echo</p>
                                <a title="Amazon Echo" class="preview" href="images/portfolio/b.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/c.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                            <p>Philips Hue</p>
                                <a title="Philips Hue" class="preview" href="images/portfolio/c.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/d.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                            <p>Amazon Echo Dot & Echo Look</p>
                                <a title="Amazon Echo Dot & Echo Look" class="preview" href="images/portfolio/d.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/e.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                            <p>Nest Thermostat</p>
                                <a title="Nest Thermostat" class="preview" href="images/portfolio/e.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/f.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                            <p>Google Home Mini</p>
                                <a title="Google Home Mini" class="preview" href="images/portfolio/f.jpg" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <!--/.row-->
            <!-- <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div> -->
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Services</h2>
                <p class="lead">From custom assembled PC to making your home smart, we provide best <br> in class services in all these fields.</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web-app.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Custom Assemble PC</h3>
                            <p>You Can custome assemble your PC in Easy & Affordable</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Smart Home Configuration</h3>
                            <p>Make your home smart with smart home Devices</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/ux.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Smart Security Configuration</h3>
                            <p>Enable latest & smart security devices in your home</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Mobile UI/UX</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web-app.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Applications</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div> -->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>

    
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">PC Assamble</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02"> Make your Home Smart </a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Smart Security</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Buy A PC</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/5c901411824eb.png">
                                            </div>
                                            <div class="media-body">
                                                <h2>PC Assemble</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active in text-right" id="tab2">
                                        <div class="video-box">
                                        
                                            <img src="images/thomas-kolnowski-723280-unsplash.jpg" alt="video">
                                            <a title="Smart Home Setup" class="video-icon" href="https://www.youtube.com/watch?v=F9RAYRUR9FM" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade text-right" id="tab3">
                                    <div class="video-box">
                                    
                                            <img src="images/thomas-kolnowski-723280-unsplash.jpg" alt="video">
                                            <a title="Smart Security Setup" class="video-icon" href="https://www.youtube.com/watch?v=f07OoChF2Mw" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/5c9013f8a6c98.png">
                                            </div>
                                            <div class="media-body">
                                                <h2>Buy A PC</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                    </div>
                                </div>
                                <!--/.tab-content-->
                            </div>
                            <!--/.media-body-->
                        </div>
                        <!--/.media-->
                    </div>
                    <!--/.tab-wrap-->
                </div>
                <!--/.col-sm-6-->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#content-->

    

    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">What our clients say about Tilottama.Tech</p>
            </div>
                
            <div class="testimonial-slider owl-carousel">
            <?php
                
                foreach ($userReview as  $row_monitor_list) {
                                   
                ?>
                <div class="single-slide">
                    <!-- <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div> -->
                    <div class="content">

                    
                       <h2><?php $rating = $row_monitor_list['star'];
for($i=0; $i<$rating; $i++) {
    echo '<i class="fa fa-star" aria-hidden="true"></i>';
}

?></h2>
                        <p><?php echo $row_monitor_list['review'];?></p>
                        <h4>-<?php echo $row_monitor_list['name'];?></h4>
                    </div>
                </div>

                <?php
                        }
                    
                        ?>     
               
            </div>
            

        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>We use thesre Product</h2>
                <hr class="hr_syle">
                <!-- <p class="lead edit_p_partner" style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="partners">
                <ul>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown edit_imgs" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/400px-Dell_logo.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown edit_imgs" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/Amazon Alexa_0.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown edit_imgs" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/TPLINK.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown edit_imgs" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/Nvidia_logo.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown edit_imgs" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/58568d224f6ae202fedf2720.png"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->


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

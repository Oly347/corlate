<?php
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();

$obj_comp = new component_inc ;

$rowProductPCList = $obj_comp->getProductPCList();
$rowMonitorList = $obj_comp->getComponentDetailsMonitorForUser();

$rowKeyBoardMouseList = $obj_comp->getComponentDetailsKeyBoardmouseForUser();

$rowHeadPhoneList = $obj_comp->getComponentDetailsHeadphoneForUser();
$rowSpeakerList = $obj_comp->getComponentDetailsSpeakerForUser();



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
                        <li ><a href="smart_security_home.php">Smart Home security</a></li>
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

    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Prooduct List</h1>
    </div>
    
    <section class="pricing">
        <div class="large-title text-center">        
            <h2>Monitor list</h2>
            <!-- <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p> -->
        </div> 
        <div class="container edit_product_container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                <?php
                
                foreach ($rowMonitorList as  $row_monitor_list) {
                                   
                ?>
                    <div class="single-pricing">
                    
                        <span>ID<?php echo $row_monitor_list['id'];?></span>
                        
                        <h1>
                            <span>&#x20b9;<?php echo $row_monitor_list['component_price'];?></span>
                            
                            
                        </h1>
                        <div class="clearfix">
                            <ul>
                                <li><img  src ="admin/upload/<?php echo $row_monitor_list['component_image'];?>" height=100 width=100 /> </li>
                                <li>Monitor Name<?php echo $row_monitor_list['component_name'];?></li>
                                <li>Monitor Details<?php echo $row_monitor_list['component_details'];?></li>
                                
                                
                                <!-- <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li> -->
                            </ul>
                        </div>

                        

                        
                        <a href="buy_monitor.php?id=<?php echo $row_monitor_list['id'];?>" role="button">BUY</a>
                       </div>
                        <?php
                        }
                    
                        ?>

                    <!-- product -->
                   
                </div>
            </div>
        </div>
         <!-- container -->
    </section>

    <hr>

    



    <section class="pricing">
        <div class="large-title text-center">        
            <h2>Key Board & Mouse</h2>
            <!-- <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p> -->
        </div> 
        <div class="container edit_product_container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                <?php
                
                foreach ($rowKeyBoardMouseList as  $row_keyboard_mouse_list) {
                                   
                ?>
                    <div class="single-pricing">
                    
                        <span><?php echo $row_keyboard_mouse_list['id'];?></span>
                        
                        <h1>
                            <span>&#x20b9;<?php echo $row_keyboard_mouse_list['component_price'];?></span>
                            
                            
                        </h1>
                        <div class="clearfix">
                            <ul>
                                <li><img  src ="admin/upload/<?php echo $row_keyboard_mouse_list['component_image'];?>" height=100 width=100 /> </li>
                                <li>Name-<?php echo $row_keyboard_mouse_list['component_name'];?></li>
                                <li>Keyboard & mouse-<?php echo $row_keyboard_mouse_list['component_details'];?></li>
                                
                                <!-- <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li> -->
                            </ul>
                        </div>

                        

                        
                        <a href="buy_keyboardmouse.php?id=<?php echo $row_keyboard_mouse_list['id'];?>" role="button">BUY</a>
                       </div>
                        <?php
                        }
                    
                        ?>

                    <!-- product -->
                   
                </div>
            </div>
        </div>
         <!-- container -->
    </section>

    <hr>
    <section class="pricing">
        <div class="large-title text-center">        
            <h2>Headphone</h2>
            <!-- <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p> -->
        </div> 
        <div class="container edit_product_container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                <?php
                
                foreach ($rowHeadPhoneList as  $row_head_phone_list) {
                                   
                ?>
                    <div class="single-pricing">
                    
                        <span><?php echo $row_head_phone_list['id'];?></span>
                        
                        <h1>
                            <span>&#x20b9;<?php echo $row_head_phone_list['component_price'];?></span>
                            
                            
                        </h1>
                        <div class="clearfix">
                            <ul>
                                <li><img  src ="admin/upload/<?php echo $row_head_phone_list['component_image'];?>" height=100 width=100 /> </li>
                                <li>Name-<?php echo $row_head_phone_list['component_name'];?></li>
                                <li>Keyboard & mouse-<?php echo $row_head_phone_list['component_details'];?></li>
                                
                                <!-- <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li> -->
                            </ul>
                        </div>

                        

                        
                        <a href="buy_headphone.php?id=<?php echo $row_head_phone_list['id'];?>" role="button">BUY</a>
                       </div>
                        <?php
                        }
                    
                        ?>

                    <!-- product -->
                   
                </div>
            </div>
        </div>
         <!-- container -->
    </section>

<hr>

    <section class="pricing">
        <div class="large-title text-center">        
            <h2>Speaker</h2>
            <!-- <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p> -->
        </div> 
        <div class="container edit_product_container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                <?php
                
                foreach ($rowSpeakerList as  $row_speaker_list) {
                                   
                ?>
                    <div class="single-pricing">
                    
                        <span><?php echo $row_speaker_list['id'];?></span>
                        
                        <h1>
                            <span>&#x20b9;<?php echo $row_speaker_list['component_price'];?></span>
                            
                            
                        </h1>
                        <div class="clearfix">
                            <ul>
                                <li><img  src ="admin/upload/<?php echo $row_speaker_list['component_image'];?>" height=100 width=100 /> </li>
                                <li>Name-<?php echo $row_speaker_list['component_name'];?></li>
                                <li>Keyboard & mouse-<?php echo $row_speaker_list['component_details'];?></li>
                                
                                <!-- <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li> -->
                            </ul>
                        </div>

                        

                        
                        <a href="buy_speaker.php?id=<?php echo $row_speaker_list['id'];?>" role="button">BUY</a>
                       </div>
                        <?php
                        }
                    
                        ?>

                    <!-- product -->
                   
                </div>
            </div>
        </div>
         <!-- container -->
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
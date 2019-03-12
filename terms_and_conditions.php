<?php

include ('admin/system/database.php');
include ('admin/employee.cls.php');
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
                            echo '<a href="user_dashboard.php" class="btn btn-imfo   active" role="button" aria-pressed="true">My Account</a>';
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Assemble PC</a></li>
                        <li><a href="smart_security_home.php">Smart Home security</a></li>
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
        <h1>Terms & Conditions</h1>
    </div>
    
    <section class="pricing">
    <div class="container">

<div class="page-header">
    <h1>Tilottama.Tech<small> Terms & Conditions</small></h1>
</div>
<!-- <h1>Terms & Conditions</h1> -->
<p>PLEASE READ THIS DOCUMENT CAREFULLY! IT CONTAINS VERY IMPORTANT INFORMATION ABOUT YOUR TERMS AND CONDITIONS OF SALE ("SALE AGREEMENT"), RIGHTS AND OBLIGATIONS, AS WELL AS LIMITATIONS AND EXCLUSIONS THAT MAY APPLY TO YOU. THE CUSTOMER AGREES TO BE BOUND BY THE AGREEMENT BELOW AND ACCEPTS ITS TERMS AND CONDITIONS. </p>
<h2>Terms and Conditions of Sale </h2>
<p>This Standard Terms and Conditions for Sale Agreement (“Agreement”) contains the terms and conditions that apply to any order, purchase, receipt, delivery, use of any Computer system(s) and/or any related buildpc products and/or services and support sold in the United States ("Product") from buildpc Corporation and or any of its subsidiaries or affiliates (collectively, “buildpc”), and is also a. legal contract between Customer and buildpc. The customer by accepting delivery of the product(s) purchased from buildpc and described on your invoice, you agree to be bound by and accept the following terms and conditions. Any attempt to alter, supplement or amend this document or to enter an order for a product(s) that is subject to additional or altered terms and conditions will be null and void unless otherwise agreed to in a written agreement signed by both you and buildpc. These terms and conditions are subject to change without prior written notice at any time, in buildpc's sole discretion. </p>
<p>This Sale Agreement constitutes the entire agreement between the Customer and buildpc relating to the purchase or sale of goods or services on the Site. The Sale Agreement may only be modified or terminated with regard to goods or services that have been purchased or sold on the Site in a writing signed by buildpc. Electronic records (including signatures), that are otherwise valid, shall be accepted under the Sale Agreement. </p>
<p>buildpc may at any time revise these terms and conditions of Use and or are by subject to change without prior written notice at any time, in buildpc's sole discretion. By using this Site, you agree to be bound by any and all such revisions and should therefore periodically visit this page to determine the then current Terms and conditions set forth to which you are bound. </p>
<ul><li>
Definitions. </li>
<li> “We”, “us” and/or “our” means buildpc.</li>
<li> “You” or “your” means the individual or entity named on the invoice. </li>
<li> Orders; Payment Terms; Taxes ,Quotes; Interest.
Payment Terms, Orders, and Interest. Advertised prices are in U.S. dollars and, unless otherwise noted, exclude shipping, handling and any taxes that may be imposed by the legal authority that governs the jurisdiction in which you reside. Orders are not binding upon buildpc until payments were authorized by credit card issuer or other financial institution. Terms of payment are within buildpc's sole discretion, and unless otherwise agreed to in writing by buildpc, payment must be received by buildpc before buildpc's acceptance of an order. Payment for the products will be made by credit card, or some other prearranged payment method unless credit terms have been agreed to by buildpc. Invoice amounts are due and payable within the period noted on the invoice, measured from the date of the invoice. buildpc may invoice parts of an order separately. You agree to pay interest on all past-due sums at the highest rate allowed by law. Your order is subject to cancellation by buildpc, at buildpc's sole discretion. Unless you and buildpc have agreed to a different discount, buildpc's standard pricing policy for buildpc-branded systems, which include both hardware and services in one discounted price, allocates the discount off list price applicable to the service portion of the system to be equal to the overall calculated percentage discount off list price on the entire system. buildpc is not responsible for pricing, typographical or other errors in any offer by buildpc and we reserve the unilateral right to cancel any orders resulting from such errors. </li>
<li> Taxes
Unless otherwise indicated on the face of the invoice, you are responsible for paying all taxes associated with your order. </li>
<li> OWNERSHIP OF MATERIALS
Materials are copyrighted and are protected by worldwide copyright laws and treaty provisions. They may not be copied, reproduced, modified, published, uploaded, posted, transmitted, or distributed in any way, without buildpc's prior written permission. Except as expressly provided herein, buildpc and its suppliers do not grant any express or implied right to you under any patents, copyrights, trademarks, trade secret or any other intellectual property or proprietary right. </li>
<li> LIMITATION OF LIABILITY
buildpc DOES NOT ACCEPT LIABILITY BEYOND THE REMEDIES SET FORTH HEREIN, INCLUDING ANY LIABILITY FOR PRODUCTS NOT BEING AVAILABLE FOR USE, FOR LOST OR CORRUPTED DATA OR SOFTWARE, OR THE PROVISION OF SERVICES AND SUPPORT. buildpc WILL NOT BE LIABLE FOR LOST PROFITS, LOSS OF BUSINESS OR OTHER CONSEQUENTIAL, SPECIAL, INDIRECT OR PUNITIVE DAMAGES, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, OR FOR ANY CLAIM BY ANY THIRD PARTY EXCEPT AS EXPRESSLY PROVIDED HEREIN. YOU AGREE THAT FOR ANY LIABILITY RELATED TO THE PURCHASE OF PRODUCTS OR SERVICES BUNDLED WITH THE PRODUCTS, buildpc IS NOT LIABLE OR RESPONSIBLE FOR ANY AMOUNT OF DAMAGES ABOVE THE AGGREGATE DOLLAR AMOUNT YOU PAID FOR THE PURCHASE GOVERNED BY THIS AGREEMENT. </li>
<li> Software
All software is provided subject to the license agreement that is part of the package you receive from buildpc. You agree to be bound by the license agreement once the package is opened or its seal is broken. buildpc does not warrant any software under this Agreement. </li>
</ul>
<ul><li>
All information displayed, transmitted or carried on buildpc.in is protected by copyright and other intellectual property laws.</li><li>
This site is updated and maintained independently by Tilottama.Tech The content is owned by Tilottama.Tech You may not modify, publish, transmit, transfer, sell, reproduce, create derivative work from, distribute, re-post, perform, display or in any way commercially exploit any of the content.
</li><li>Tilottama.Tech disclaims all warranties or conditions, whether expressed or implied, (including without limitation implied, warranties or conditions of information and context). We consider ourselves and intend to be subject to the jurisdiction only of the courts of Hyderabad, India.
</li><li>Tilottama.Tech reserves the right, in its sole discretion, to suspend or cancel the service at any time if a computer virus, bug, or other technical problem corrupts the security or proper administration of the service.</li><li>
Tilottama.Tech values the privacy of information pertaining to its associates. We do not use or disclose information about your individual visits to our website or any information that you may give us, such as your name, address, email address or telephone number, to any outside sources.
</li><li>Tilottama.Tech reserves the right to refuse service to anyone at any time.
</li><li>Tilottama.Tech will not use information about you without your permission and will provide the means for you to manage and control the information that you have provided. We will enable you to communicate your privacy concerns to us and that we will respond to them appropriately.
</li><li>Tilottama.Tech does not disclose any personal information to advertisers and for other marketing and promotional purposes that could be used to personally identify you, such as your password, credit card number and bank account number.</li></ul>
<h2>Disclaimer</h2>
<ul><li>
Tilottama.Tech and their respective publishers, authors, agents, and employees have done their best to ensure the accuracy and currency of all the information on this website contributed by them; however, they accept no responsibility for any loss, injury, or damages sustained by anyone as a result of information or advice contained on the site nor for the results of any travel arrangement originating from this site.</li><li>
Tilottama.Tech and their respective publishers, authors, agents, and employees make no representations about the suitability of the information contained in the documents and related graphics published on this website for any purpose. All such documents and related graphics are provided ''as is'' without warranty of any kind, statutory or otherwise. Tilottama.Tech and their respective publishers, authors, agents, and employees disclaim all warranties and conditions with regard to this internet site and the information contained therein, including, without limitation, all implied warranties and conditions of merchantability, fitness for a particular purpose, title, and non-infringement. In no event shall Tilottama.Tech and their respective publishers, authors, agents, and employees, be liable for any special, indirect, or consequential damages or any damages whatsoever whether in an action of contract, negligence, or other tortuous action, arising out of or in connection with the use or performance of this internet site or of the information and documents contained therein, provision of or failure to provide services, or any other information directly or indirectly available from this website.
</li><li>The documents and related graphics published on this website could include technical inaccuracies or typographical errors. Changes are periodically added to the information herein. Tilottama.Tech may make improvements and/or changes in the product(s) described herein at any time. The linked sites are not under the control of Tilottama.Tech and their respective employees are not responsible for the contents of any linked site or any link contained in a linked site. Tilottama.Tech is providing these external links to you only as a convenience, and the inclusion of any link does not imply endorsement by Tilottama.Tech of the site. All views expressed by individuals on this site are their personal opinions and are not necessarily those of or endorsed by Tilottama.Tech
</li></ul>
</div>
</div>
<!-- Bootstrap FAQ - START -->
<div>
  
    
    </section>

    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">
                        <img src="images/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">We are hiring</a></li>
                                    <li><a href="#">Meet the team</a></li>
                                    <li><a href="#">Copyright</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Refund policy</a></li>
                                    <li><a href="#">Ticket system</a></li>
                                    <li><a href="#">Billing system</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
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
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Our Partners</h3>
                                <ul>
                                    <li><a href="#">Adipisicing Elit</a></li>
                                    <li><a href="#">Eiusmod</a></li>
                                    <li><a href="#">Tempor</a></li>
                                    <li><a href="#">Veniam</a></li>
                                    <li><a href="#">Exercitation</a></li>
                                    <li><a href="#">Ullamco</a></li>
                                    <li><a href="#">Laboris</a></li>
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
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
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
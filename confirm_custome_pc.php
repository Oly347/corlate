<?php
include ('admin/system/database.php');
include ('admin/employee.cls.php');

session_start();
$obj_comp = new component_inc ;
$obj_emp = new employee_inc ;

if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) 
{
$userID=$_SESSION['userName'];
}
else{
$userID=$_SESSION['temp_user'];
    
} 

//$rowPrice = $obj_emp->getPrice();

//$rowEmployee = $obj_emp->getEmployee();
//echo $_GET['id'];

// $rowProductPC = $obj_comp->getProductPCById($_GET['id']);
// //  echo "<pre>";
// //  print_r($rowProductPC);
// // echo "</pre>";
// // exit;
// foreach ($rowProductPC as $key => $value) {
//     $product_no=$value['product_no'];
//     $cabinet=$value['cabinet'];
//     $product_weight=$value['product_weight'];
//     $product_dimensions=$value['product_dimensions'];
//     $processor_brand=$value['processor_brand'];
//     $processor_type=$value['processor_type'];
//     $ram_size=$value['ram_size'];
//     $ram_type=$value['ram_type'];
//     $hard_disk_size=$value['hard_disk_size'];
//     $hard_disk_tech=$value['hard_disk_tech'];
//     $operating_system=$value['operating_system'];
//     $g_card=$value['g_card'];
//     $additional_information=$value['additional_information'];
//     $product_price=$value['product_price'];

// }

// ?>


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
        <h1>Product Buy</h1>
    </div>
    
    <section class="pricing">
    <div class="container">
    <form  action="custome_product_checkout.php" method="post" id="employeeForm" >

    <div class="form-group row">
                                
                                <div class="col-md-10">
                                    User name<input type="text" id="user_name" class="form-control" name="user_name" value="<?php echo $userID ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    CPU Name<input type="text" id="cpu_model" class="form-control" name="d1" value="<?php echo $_POST["cpu_model"] ;?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    CPU Price<input type="text" id="cpu_price" class="form-control" name="d2" value="<?php echo $_POST["cpu_price"];?> " readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Cabinet Name<input type="text" id="cab_model" class="form-control" name="d3" value="<?php echo $_POST["cab_model"];?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Cabinet Price<input type="text" id="cab_price" class="form-control" name="d4" value="<?php echo $_POST["cab_price"];?> " readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    SMPS Name<input type="text" id="smps_model" class="form-control" name="d5" value="<?php echo $_POST["smps_model"];?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    SMPS Price<input type="text" id="smps_price" class="form-control" name="d6" value="<?php echo $_POST["smps_price"];?> " readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    MotherBoard Name<input type="text" id="mboard_model" class="form-control" name="d7" value="<?php echo $_POST["mboard_model"];?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                MotherBoard Price<input type="text" id="mboard_price" class="form-control" name="d8" value="<?php echo $_POST["mboard_price"];?> " readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Hard Drive Name<input type="text" id="hdrive_model" class="form-control" name="d9" value="<?php echo $_POST["hdrive_model"];?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                Hard Drive Price<input type="text" id="hdrive_price" class="form-control" name="d10" value="<?php echo $_POST["hdrive_price"];?> " readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Memory Name(RAM)<input type="text" id="memory_model" class="form-control" name="d11" value="<?php echo $_POST["memory_model"];?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Memory Price<input type="text" id="memory_price" class="form-control" name="d12" value="<?php echo $_POST["memory_price"];?> " readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Graphic Card NAME<input type="text" id="gcard_model" class="form-control" name="d13" value="<?php echo $_POST["gcard_model"];?> " readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                Graphic Card Price<input type="text" id="gcard_price" class="form-control" name="d14" value="<?php echo $_POST["gcard_price"];?> " readonly>
                                </div>
                            </div>


                            


                            <div class="form-group row">
                            
                                <div class="col-md-10">
                                    Total Price<input type="text" id="total" class="form-control" name="total" value="<?php echo $_POST["total"]; ?>" readonly>
                                </div>
                            </div>



    
                        
                     <div class="form-actions">
                     <a href="index.php" class="btn btn-info btn-outline">Cancel</a>
                     <?php
                        if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
                            echo '<button type="submit" class="btn btn-success btn-outline" >
                            Buy <i class="fa fa-sign-in"></i>
                            </button>';
                            
                        } else {
                            echo '<a href="user_login.php" class="btn btn-success btn-outline" style="float:center" role="button" aria-pressed="true">Login To Buy</a>';
                        }
                        ?>

                        </div>
                    </form>
                    </div>
    </section>
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
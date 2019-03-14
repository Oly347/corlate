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

$rowProductPC = $obj_comp->getProductPCById($_GET['id']);
//  echo "<pre>";
//  print_r($rowProductPC);
// echo "</pre>";
// exit;
foreach ($rowProductPC as $key => $value) {
    $product_no=$value['product_no'];
    $cabinet=$value['cabinet'];
    $product_weight=$value['product_weight'];
    $product_dimensions=$value['product_dimensions'];
    $processor_brand=$value['processor_brand'];
    $processor_type=$value['processor_type'];
    $ram_size=$value['ram_size'];
    $ram_type=$value['ram_type'];
    $hard_disk_size=$value['hard_disk_size'];
    $hard_disk_tech=$value['hard_disk_tech'];
    $operating_system=$value['operating_system'];
    $g_card=$value['g_card'];
    $additional_information=$value['additional_information'];
    $product_price=$value['product_price'];

}

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
        <h1>Product Buy</h1>
    </div>
    
    <section class="pricing">
    <div class="container">
    <form  action="checkout.php" method="post" id="employeeForm" >

                    <div class="form-group">
                                            <label>User Name</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $userID?>" readonly>
                            <input type="hidden" name="product_id"  class="form-control" value="<?php echo $_GET['id']; ?>">
                                            
                                        </div>
                        <div class="form-group">
                            <label>Product Number</label>
            <input type="text" name="product_no" id="product_no" class="form-control" value="<?php echo $product_no; ?>" readonly>
            
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Cabinet</label>
                            <input type="text" name="cabinet" class="form-control" value="<?php echo $cabinet; ?>" readonly>
                            
                        </div>


                        <div class="form-group">
                            <label>Product Weight</label>
                            <input type="text" name="product_weight" class="form-control" value="<?php echo $product_weight; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Product Dimensions</label>
                            <input type="text" name="product_dimensions" class="form-control" value="<?php echo $product_dimensions; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Processor Brand</label>
                            <input type="text" name="processor_brand" class="form-control" value="<?php echo $processor_brand; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Processor type</label>
                            <input type="text" name="processor_type" class="form-control" value="<?php echo $processor_type; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>RAM Size</label>
                            <input type="text" name="ram_size" class="form-control" value="<?php echo $ram_size; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>RAM Type</label>
                            <input type="text" name="ram_type" class="form-control" value="<?php echo $ram_type; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Hard Disk size</label>
                            <input type="text" name="hard_disk_size" class="form-control" value="<?php echo $hard_disk_size; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Hard Disk Technology</label>
                            <input type="text" name="hard_disk_tech" class="form-control" value="<?php echo $hard_disk_tech; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Operating system</label>
                            <input type="text" name="operating_system" class="form-control" value="<?php echo $operating_system; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Graphic Card</label>
                            <input type="text" name="g_card" class="form-control" value="<?php echo $g_card; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Additional Information</label>
                            <input type="text" name="additional_information" class="form-control" value="<?php echo $additional_information; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="product_price" class="form-control" value="<?php echo $product_price; ?>" readonly>
                            
                        </div>


                     </div>


    
                        
                     <div class="form-actions">
                     <a href="index.php" class="btn btn-info btn-outline">Cancel</a>
                     <?php
                        if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
                            echo '<button type="submit" class="btn btn-success btn-outline" >
                            Next <i class="fa fa-sign-in"></i>
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
    
    <!--/#bottom-->

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
<?php
include ('admin/system/database.php');
include ('admin/employee.cls.php');
require_once('config.php'); 
session_start();


if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    
} 
else {
header('Location:user_login.php');
}
$obj_comp = new component_inc ;
$obj_emp = new employee_inc ;

$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$transaction = 'TS' . $today . $rand ;

$orderId = 'ORD' . $today . $rand ;



$obj_user = new user_inc ;
$userDetailsById = $obj_user->getUserById($_SESSION['userName']);



foreach ($userDetailsById as $key => $value) {
    $name=$value['name'];
    $phone_number=$value['phone_number'];
    $address=$value['address'];
    $profile_pic=$value['profile_pic'];
    
  
}

$data = $_POST['process'];


foreach ($data as $value) {
    
    
$interestedValues[] = $value;
}
    
$discrption = implode('--------and--------', $interestedValues);
    
//echo $discrption ;
  


$details = $_POST['details'];
//print_r ($data) ;

foreach ($details as $value) {
    
    
$detailsValues[] = $value;
}
    
$ProductDetails = implode('--------and--------', $detailsValues);



$price = $_POST['price'];
//print_r ($data) ;

foreach ($price as $value) {
    
    
$productPrice[] = $value;
}
    
$priceListOfProduct = implode('--------and--------', $productPrice);
    
    
//echo $discrption ;


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
        <h1>Product Checkout</h1>
    </div>
    
    <section class="pricing">
    <div class="container">
    <form  action="order.dml.php" method="post" id="employeeForm" >

    <div class="form-group">
                                            <label>Order Id</label>
                            <input type="text" name="order_id" id="order_id" class="form-control" value="<?php echo $orderId ?>" readonly>
                            
                                            
                                        </div>

                    <div class="form-group">
                                            <label>User Name</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['userName']; ?>" readonly>
                            
                                            
                                        </div>


                                        <div class="form-group">
                                            <label>Process ID</label>
                            <input type="text" name="txn_id" id="txn_id" class="form-control" value="<?php echo $discrption ?>" readonly>
                            
                                            
                                        </div>                


                                        
                        <div class="form-group">
                            <label>Product Details</label>
            
            <textarea class="form-control" name="details"  id="details" readonly><?php echo $ProductDetails ?></textarea>
                            
                        </div>


                       
                        
                        


                       
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="product_price" class="form-control" value="<?php echo $priceListOfProduct ?>" readonly>
                            
                        </div>


                        <div class="form-group">
                            <label>Billing Address</label>
                            <textarea class="form-control" name="bill_addr"  id="bill_addr" readonly><?php echo $address ?></textarea>
                            
                        </div>

                        <!-- <input type="checkbox" name="present" onclick="permanent(this.form)">
                        <script language="JavaScript">
    function permanent(p) {
        if(p.present.checked == true) {
            p.per_add.value = p.temp_address.value;
            p.per_city.value = p.temp_city.value;
            p.per_state.value = p.temp_state.value;
            p.per_country.value = p.temp_country.value;
            p.per_pin.value = p.temp_pin.value;
        }
    }
</script> -->


<script type="text/javascript">

function copyBilling (f) {
	var s, i = 0;
	while (s = ['addr'][i++]) {f.elements['shipping_' + s].value = f.elements['bill_' + s].value};
}
</script>
<label style="text-align:left"><input name="same" onclick="if (this.checked) copyBilling (this.form)" type="checkbox">&nbsp;Same as billing</label>
<div class="form-group">
                            <label>Shipping Address</label>
                            <textarea class="form-control" name="shipping_addr"  id="shipping_addr"></textarea>
                            
                        </div>

                        <div class="form-group">
                            <label>Total</label>
            <input type="text" name="total" id="total" class="form-control" value="<?php echo $_POST['total']; ?>" readonly>
            
                            
                        </div>

<?php
$sub_total = $_POST['total'];
$fulltotal = 100*$sub_total;

?>
                        
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="<?php echo $fulltotal; ?>"
        data-buttontext="Pay with Razorpay"
        data-name="Tilottama.Store"
        data-description="<?php echo $orderId; ?>"
        data-image="http://tilottama.tech/images/tech_logo_dark.jpg"
        data-prefill.name=""
        data-prefill.email=""
        data-theme.color="#3d3d3d"
    >
        
        
    </script>

<style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
    </style>
    <input type="hidden" value="Hidden Element" name="hidden">
    


                     </div>


    
                        
                     <div class="form-actions">
                     <a href="index.php" class="btn btn-info btn-outline">Cancel</a>
                     <a href="user_dashboard.php" class="btn btn-info btn-outline">Back</a>
                     <!--  -->
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
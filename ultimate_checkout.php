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
        data-name="Tilottama.Tech"
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
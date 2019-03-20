<?php
include ('admin/system/database.php');
include ('admin/employee.cls.php');

session_start();


if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    
} 
else {
  echo "<script type='text/javascript'>alert('Please Login To Continue!!!');
  window.location='user_login.php';
  </script>";
}

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

$rowProductDvdDrive = $obj_comp->getProductDvdDrive($_GET['id']);
//  echo "<pre>";
//  print_r($rowProductMonitor);
// echo "</pre>";
// exit;
foreach ($rowProductDvdDrive as $key => $value) {
    $id=$value['id'];
    $component_name=$value['component_name'];
    $component_details=$value['component_details'];
    $component_price=$value['component_price'];
    
    

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
        <h1>DVD Drive Buy</h1>
    </div>
    
    <section class="pricing">
    <div class="container">
    <form  action="checkout_accessories.php" method="post" id="employeeForm" >

                    <div class="form-group">
                                            <label>User Name</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $userID?>" readonly>
                            <input type="hidden" name="product_id"  class="form-control" value="<?php echo $_GET['id']; ?>">
                                            
                                        </div>
                        <div class="form-group">
                            <label>DVD  Name</label>
            <input type="text" name="component_name" id="component_name" class="form-control" value="<?php echo $component_name; ?>" readonly>
            
                            
                        </div>
                        
                        <div class="form-group">
                            <label>DVD  Details</label>
                            <input type="text" name="component_details" class="form-control" value="<?php echo $component_details; ?>" readonly>
                            
                        </div>


                        <div class="form-group">
                            <label> Price</label>
                            <input type="text" name="component_price" class="form-control" value="<?php echo $component_price; ?>" readonly>
                            
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
    <!-- <section id="bottom">
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
                                    
                                    <li><a href="terms_and_conditions.php">Terms of use</a></li>
                                    <li><a href="privacy_policy.php">Privacy policy</a></li>
                                    <li><a href="contact-us.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                       

                        <div class="col-md-4 col-sm-4">
                            <div class="widget">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="faq.php">Faq</a></li>
                               
                                    <li><a href="refund_policy.php">Refund policy</a></li>
                                    <li><a href="#">Enquery</a></li>
                                    <li><a href="main_services">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        

                        <div class="col-md-4 col-sm-4">
                            <div class="widget">
                                <h3>Our Partners</h3>
                                <ul>
                                    <li><a href="#">DELL</a></li>
                                    <li><a href="#">Amazon</a></li>
                                    <li><a href="#">Intel</a></li>
                                    <li><a href="#">Tp-LinK</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>


            </div>
        </div>
    </section> -->
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
<?php
session_start();

if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    $userID=$_SESSION['userName'];
    }
    else{
    $userID=$_SESSION['temp_user'];
    
    } 
//print session
// print($_SESSION['session_id']);
//remove/destroy particular session or
// unset($_SESSION['session_name']);
// //destroy all the sessions'
// // remove all session variables
// session_unset();
// // destroy the session
// session_destroy();

include ('admin/system/database.php');
include ('admin/employee.cls.php');


$obj_emp = new employee_inc ;

$rowEmployee = $obj_emp->getEmployeeById($userID);




$obj_comp = new component_inc ;

$rowCPUComponent = $obj_comp->getComponentDetailsCPU();

//$cpuRow = $obj_comp->getCPUById($rowEmployee['CPU']);

// if (isset($_SESSION['view']) && $_SESSION['view'] ==true) {
  
// } 
// else {
//   header('Location:services.php');
//  }
// $rowEmployee = $obj_emp->getEmployee();
// $rowEmployee = $obj_emp->getEmployeeById($_GET['id']);
// echo $_GET['id'];
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
    <link href="css/style_edit.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <style>
    body{overflow-x: hidden;}
        
    </style>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" > -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


   <?php
 
 echo '<script type="text/javascript">';
  
 echo 'setTimeout(function () { swal("Congrats!!","Your PC is Ready!","success");';
  
 echo '}, 500);</script>';
  
 ?>
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

    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <div class="center-outer">
<div class="center-inner">

<div class="bubbles">
<h1>Your CPU is Ready</h1>
</div>

</div>
</div>
    </div>
    
    <section id="services" class="service-item">
        <div class="container">
            <!-- <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div> -->

            <div class="row edit_row">

                <div class="alert custome_alert alert-info" >
  <strong>Info!</strong> You Can choose only one configuration setup at a time
</div>
<div class="row"  style="display: none;" >
  <h2>Basic Table</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        
        <th>CPU</th>
        <th>CAB</th>
        <th>SMPS</th>
        <th>Mothetr Board</th>
        <th>Haed Drive</th>
        <th>RAM</th>
        <th>Graphic Card</th>

        <th>TOTAL</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($rowEmployee as  $row_employee) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_employee['id'];?> </td>
        <td><?php echo $row_employee['CPU'];?> </td>
        <td><?php echo $row_employee['CAB'];?></td>
        <td><?php echo $row_employee['SMPS'];?></td>
        <td><?php echo $row_employee['Morherboard'];?> </td>
        <td><?php echo $row_employee['Harddrive'];?> </td>
        <td><?php echo $row_employee['RAM'];?> </td>
        <td><?php echo $row_employee['GCARD'];?> </td>
        <td><?php echo $row_employee['Total'];?></td>
        <td><a class="btn btn-danger"  href="delete.php?id=<?php echo $row_employee['id'];?>" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>
           Delete</a> 
        
        </td>
        
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


</div>

<?php

$rowCPUComponent = $obj_comp->getComponentDetailsCPU();
$cpuRow = $obj_comp->getCPUById($row_employee['CPU']);
$cabinetRow = $obj_comp->getCABById($row_employee['CAB']);
$smpsRow = $obj_comp->getSMPSById($row_employee['SMPS']);
$motherBoardRow = $obj_comp->getMotherBoardById($row_employee['Morherboard']);
$hardDriveRow = $obj_comp->getHardDriveById($row_employee['Harddrive']);
$memoryRow = $obj_comp->getRAMById($row_employee['RAM']);
$graphicCardRow = $obj_comp->getGCARDById($row_employee['GCARD']);



?>


<div style="display:none" >

<div class="row" style="overflow-x:auto;" >
  <h2>CPU Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>CPU Model</th>
        <th>CPU Price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($cpuRow as  $row_cpu_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_cpu_component['component_name'];?> </td>
        <td><?php echo $row_cpu_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<div class="row" style="overflow-x:auto;" >
  <h2>Cabinet Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>Cabinet Model </th>
        <th>Cabinet price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($cabinetRow as  $row_cab_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_cab_component['component_name'];?> </td>
        <td><?php echo $row_cab_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<div class="row" style="overflow-x:auto;" >
  <h2>SMPS Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>SMPS Model </th>
        <th>Cabinet price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($smpsRow as  $row_smps_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_smps_component['component_name'];?> </td>
        <td><?php echo $row_smps_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<div class="row" style="overflow-x:auto;" >
  <h2>Motherboard Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>Mother board Model </th>
        <th>Mother board price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($motherBoardRow as  $row_mother_board_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_mother_board_component['component_name'];?> </td>
        <td><?php echo $row_mother_board_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>

<div class="row" style="overflow-x:auto;" >
  <h2>Hard Drive Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>HDD Model </th>
        <th>HDD price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($hardDriveRow as  $row_hard_drive_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_hard_drive_component['component_name'];?> </td>
        <td><?php echo $row_hard_drive_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>



<div class="row" style="overflow-x:auto;" >
  <h2>Memory(RAM) Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>RAM Model </th>
        <th>RAM price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($memoryRow as  $row_memory_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_memory_component['component_name'];?> </td>
        <td><?php echo $row_memory_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>




<div class="row" style="overflow-x:auto;" >
  <h2>Graphic Card Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>Graphic Card Model </th>
        <th>Graphic Card price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($graphicCardRow as  $row_graphic_card_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_graphic_card_component['component_name'];?> </td>
        <td><?php echo $row_graphic_card_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<?php
$total=$row_cab_component['component_price']+$row_cpu_component['component_price']+
$row_smps_component['component_price']+$row_mother_board_component['component_price']+
$row_hard_drive_component['component_price']+
$row_graphic_card_component['component_price'];
?>

<div class="row" style="overflow-x:auto;" >
  <h2>Total amount</h2>
            
  <table class='table table-bordered table-striped'>
    <!-- <thead>
      <tr>
        
        
        <th>CPU- Model</th>
        <th>CPU- Price</th>
        
        
      </tr>
    </thead> -->
    <tbody>

    <?php

    foreach ($cabinetRow as  $row_cab_component) {
                       
    ?>
    
    <tr>
        <td>Total Amount</td>
        <td><?php echo $total; ?></td> 
      </tr>
      <?php
       }

      ?>


    </tbody>
  </table>


  


</div>
</div>
                        <div class="card-body col-md-18 col-md-offset-2 ">
                            <form name="my-form"  action="custome_product_checkout.php" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        User name<input type="text" id="user_name" class="form-control" name="user_name" value="<?php echo $userID ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        CPU Name<input type="text" id="cpu_model" class="form-control" name="cpu_model" value="<?php echo $row_cpu_component['component_name'];?> " readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        CPU Price<input type="text" id="cpu_price" class="form-control" name="cpu_price" value="<?php echo $row_cpu_component['component_price'];?> " readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        Cabinet Name<input type="text" id="cab_model" class="form-control" name="cab_model" value="<?php echo $row_cab_component['component_name'];?> " readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        Cabinet Price<input type="text" id="cab_price" class="form-control" name="cab_price" value="<?php echo $row_cab_component['component_price'];?> " readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        SMPS Name<input type="text" id="smps_model" class="form-control" name="smps_model" value="<?php echo $row_smps_component['component_name'];?> " readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        SMPS Price<input type="text" id="smps_price" class="form-control" name="smps_price" value="<?php echo $row_smps_component['component_price'];?> " readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        MotherBoard Name<input type="text" id="mboard_model" class="form-control" name="mboard_model" value="<?php echo $row_mother_board_component['component_name'];?> " readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                    MotherBoard Price<input type="text" id="mboard_price" class="form-control" name="mboard_price" value="<?php echo $row_mother_board_component['component_price'];?> " readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        Hard Drive Name<input type="text" id="hdrive_model" class="form-control" name="hdrive_model" value="<?php echo $row_hard_drive_component['component_name'];?> " readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                    Hard Drive Price<input type="text" id="hdrive_price" class="form-control" name="hdrive_price" value="<?php echo $row_hard_drive_component['component_price'];?> " readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        Memory Name(RAM)<input type="text" id="memory_model" class="form-control" name="memory_model" value="<?php echo $row_memory_component['component_name'];?> " readonly>
                                    </div>
                                </div>
                                <div class="form-group row">

<div class="col-md-10">  
Choose Ram Quantity
<select class="form-control" name="ram_quanty" >
<option value="1" >1</option>
<option value="2">2</option>

</select>
</div>
</div>

                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        Memory Price<input type="text" id="memory_price" class="form-control" name="memory_price" value="<?php echo $row_memory_component['component_price'];?> " readonly>
                                    </div>
                                </div>


                                                 
                                     
                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                        Graphic Card NAME<input type="text" id="gcard_model" class="form-control" name="gcard_model" value="<?php echo $row_graphic_card_component['component_name'];?> " readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                
                                    <div class="col-md-10">
                                    Graphic Card Price<input type="text" id="gcard_price" class="form-control" name="gcard_price" value="<?php echo $row_graphic_card_component['component_price'];?> " readonly>
                                    </div>
                                </div>


                                


                                <div class="form-group row" style="display:none">
                                
                                    <div class="col-md-10">
                                        Total Price<input type="text" id="total" class="form-control" name="total" value="<?php echo $total; ?>" readonly>
                                    </div>
                                </div>



                          <button type="submit" class="btn btn-success btn-outline" >
                            Save to Buy <i class="fa fa-sign-in"></i>
                            </button>

                            <a href="services.php"  class="btn btn-warning btn-outline">Reset PC <i class="fa fa-user"></i></i>
</a>
                            
                        
                               
                                        
                                        <!-- <a href="user_login.php"  class="btn btn-warning btn-outline" style="float:right">I have an account <i class="fa fa-user"></i></i> -->


                                        
                                    
                                
                            </form>
                        






<!-- <a class="btn  btn-default edit_btn" href="user_login.php">Buy CPU Now <i class="fa fa-shopping-cart"></i></a>
<a class="btn  btn-default edit_btn" href="#">Buy with Monitor & Accessories <i class="fa fa-desktop"></i></a> -->
</div>
</div>          </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->


    <!-- <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
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
    <?php require('footer.php'); ?>
    </footer>
    <!--/#footer-->
<script>
function PathLoader(el) {
  this.el = el;
    this.strokeLength = el.getTotalLength();
  
    // set dash offset to 0
    this.el.style.strokeDasharray =
    this.el.style.strokeDashoffset = this.strokeLength;
}

PathLoader.prototype._draw = function (val) {
    this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
}

PathLoader.prototype.setProgress = function (val, cb) {
  this._draw(val);
    if(cb && typeof cb === 'function') cb();
}

PathLoader.prototype.setProgressFn = function (fn) {
  if(typeof fn === 'function') fn(this);
}

var body = document.body,
    svg = document.querySelector('svg path');

if(svg !== null) {
    svg = new PathLoader(svg);
    
    setTimeout(function () {
        document.body.classList.add('active');
        svg.setProgress(1);
    }, 200);
}

document.addEventListener('click', function () {
    
    if(document.body.classList.contains('active')) {
        document.body.classList.remove('active');
        svg.setProgress(0);
        return;
    }
    document.body.classList.add('active');
    svg.setProgress(1);
});








// Created for an Articles on:
// https://www.html5andbeyond.com/bubbling-text-effect-no-canvas-required/

jQuery(document).ready(function($){
 
 // Define a blank array for the effect positions. This will be populated based on width of the title.
 var bArray = [];
 // Define a size array, this will be used to vary bubble sizes
 var sArray = [4,6,8,10];

 // Push the header width values to bArray
 for (var i = 0; i < $('.bubbles').width(); i++) {
     bArray.push(i);
 }
  
 // Function to select random array element
 // Used within the setInterval a few times
 function randomValue(arr) {
     return arr[Math.floor(Math.random() * arr.length)];
 }

 // setInterval function used to create new bubble every 350 milliseconds
 setInterval(function(){
      
     // Get a random size, defined as variable so it can be used for both width and height
     var size = randomValue(sArray);
     // New bubble appeneded to div with it's size and left position being set inline
     // Left value is set through getting a random value from bArray
     $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
      
     // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
     // Callback function used to remove finsihed animations from the page
     $('.individual-bubble').animate({
         'bottom': '100%',
         'opacity' : '-=0.7'
     }, 3000, function(){
         $(this).remove()
     }
     );


 }, 350);

});


  </script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

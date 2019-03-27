<?php
//    include("config.php");
//    session_start();
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();

if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    
} 
else {
header('Location:user_login.php');
}
    
$obj_user = new user_inc ;
$userDetailsById = $obj_user->getUserById($_SESSION['userName']);

$userOrderDetails = $obj_user->getOrderByUser($_SESSION['userName']);

$obj_comp = new component_inc ;
$userSavedItem = $obj_comp->getUserSavedItem($_SESSION['userName']);

$userCartItem = $obj_comp->getUserCartItem($_SESSION['userName']);



foreach ($userDetailsById as $key => $value) {
    $name=$value['name'];
    $phone_number=$value['phone_number'];
    $address=$value['address'];
    $profile_pic=$value['profile_pic'];
    $email_id=$value['email_id'];
    $id=$value['id'];

    
  
}



// echo "$name" ;

// echo "$phone_number" ;

// echo "$address"




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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
    body {
overflow-x: hidden;
}  


    </style>
</head>
<!--/head-->


<body>

<header id="header">
         <div class="top-bar">
            <div class="container">
            <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square" title="Tilottama.Tech"></i><a href="tel:+918240868110"> +91 8240868110</a> &nbsp; &nbsp;<i class="fa fa-envelope-square" ></i> <a href="mailto:support@tilottama.tech?Subject=Hello%20again" target="_top">support@tilottama.tech</a></p> 
                            <!-- <p><i class="fa fa-phone-square"></i> +91 8240868110</p>  -->
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook" title="Tilottama.Tech"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" title="Tilottama.Tech"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" title="Tilottama.Tech"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                                <!-- <li><a class="btn-slide animation animated-item-3" href="#">Learn More</a><li> -->
                            </ul>
                            <div class="search">
                            <!-- <a href="#" class="btn btn-primary  active" role="button" aria-pressed="true">Primary link</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12" >
                        <div class="top-number" >


                        

                   
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Account
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <li>&nbsp; &nbsp;<img src ="admin/upload/<?php echo $profile_pic ?>" height=50px width=50px  style=" border-radius: 50%; border: 1px solid black; padding:1px"/> </li>
                            <li><a href="#"><?php echo $_SESSION['userName']; ?></a></li>

                            
                            
                            <li><a href="logout.php">logout</a></li>
                            </ul>
                            </div>
                        


                        
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
                        
                        <li><a href="services.php">Assemble Your PC</a></li>
                        <li ><a href="product_pc.php">Buy A PC</a></li>
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


    <div class="page-title dashboard_banner">
        <h1>User Dashboard</h1>
    </div>
    
    <section id="content">
        <div class="container edit_dashboard_container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Dashboard</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Order List</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Download</a></li>
                                    <!-- <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Address</a></li> -->
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Account Details</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Saved (Cart) Item</a></li>
                                    <!-- <li class=""><a href="logout.php" data-toggle="tab" class="tehnical">Logout</a></li> -->
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab4">
                                        <div class="media">
                                            
                                            
                                            <div class="media-body">
                                            <h1><img src ="admin/upload/<?php echo $profile_pic ?>" height=100px width=80px /> </h1>
                                            <h2 style="display:none">Name:<?php echo $id ?> </h2>
                                                <h2>Name:<?php echo $name ?> </h2>
                                                <p>address:<?php echo $address ?> </p>
                                                <p>Phone Number:<?php echo $phone_number ?> </p>
                                                <p>EmailID:<?php echo $email_id ?> </p>
                                                <a class="btn btn-success" href="customer_review.php" role="button">Write a Review</a>
                                                <a class="btn btn-info" href="upload_profile.php?id=<?php echo $email_id?>" role="button">Profile Update</a>

                                                <a class="btn btn-success" href="change_password.php?id=<?php echo $email_id?>" role="button">Password Change</a>
                                            </div>


                                            
                                        </div>
                                    </div>

                                   


                                    <div class="tab-pane fade active in hero-bkg-animated" id="tab1" >

                                    <div class="col-md-6 col-sm-12" style="border-right:1px solid #000; height:100px">
                                    <!-- <a class="btn btn-info edit_button" href="product_pc_item.php" role="button" style="margin:30px">Additional PC item</a> -->
                                    <a class="btn btn-info edit_button" href="#tab5" data-toggle="tab" class="tehnical" style="margin:30px; ">Buy PC From Cart</a>

                                        </div>
                                        <!-- <div style="border-left:1px solid #000; height:100px"></div> -->
                                        <div class="col-md-6 col-sm-12" style="margin-top:-30px">
                                    <div class="wrapper">
  <a href="product_pc_item.php"> By Additional PC item<span class="arrow"><span></span></span></a>

  
</div>


<div class="wrapper" >
  <a href="product_monitor.php">Buy Monitor & Accessories<span class="arrow"><span></span></span></a>

  
</div>
                                        </div> 
                                    </div>

                    <div class="tab-pane fade" id="tab5" style="overflow-x:auto;">
                    <form id="regForm" action="ultimate_checkout.php" method="post">
                   
                    <table class='table table-borderless '>
                    <thead>
                      <tr>
                     
                        <th style="display:none">ID</th>
                        
                        
                        <th>Process ID</th>
                        <th>Deatils</th>
                        
                       
                        <th>Product Price</th>
                        <th>Action</th>
                        
                       
                        
                       
                      </tr>
                    </thead>
                    <tbody>





                    <?php



                $total=0;
                if (empty($userCartItem)){

                  echo  '<tr>
                  <td>
                  <h3>Your Cart is empty. Continue To <a class="btn btn-info" href="product_pc.php" role="button">Shop&nbsp;<i class="fa fa-shopping-bag"></i>

                  </a> </h3>
                  </td

                   </tr>' ;
                    }else{

            
                    foreach ($userCartItem as  $user_cart_item) {
                              $total+= $user_cart_item['product_price'];
                              
                              //$product+=$user_cart_item['details'];
                    ?>
                      <tr>
                      <?php 


// if (empty($user_cart_item)){

//  echo "No item In Cart"; 
// }else{
                      ?>
                        <td style="display:none"><?php echo $user_cart_item['id'];?></td>
                        <td> <input class="form-control" type="text"  name="process[]" value="<?php echo $user_cart_item['txn_id'];?>" readonly></td>
                        <td> <Textarea class="form-control" type="text"  name="details[]" value="" readonly><?php echo $user_cart_item['details'];?></Textarea>
                        
                        <td> <input class="form-control" type="text"  name="price[]" value="<?php echo $user_cart_item['product_price'];?>" readonly></td>
                        
                        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $user_cart_item['id'];?>" role="button">Delete&nbsp;<i class="fa fa-trash" aria-hidden="true"></i>

</a>
                        
                        </td>
                     
                        <!-- <td>
                        <a class="btn btn-danger" href="" role="button">Delete</a>
                        <a class="btn btn-info" href="" role="button">Update</a>
                        </td> -->
                      </tr>
                 
                      <?php
                       }
                    }
                      ?>
                      
                    </tbody>
                  </table>
                  Total cart value:<input class="form-control" type="text"   name="total" value="<?php echo $total ?>" readonly>
                  <button type="submit" class="btn btn-success btn-outline" >
                            Checkout<i class="fa fa-shopping-cart"></i>

                            </button><a class="btn btn-danger btn-outline" href="empty_cart.php?id=<?php echo $email_id?>"  style="margin-left:10px;" role="button">Empty cart&nbsp;<i class="fa fa-trash" aria-hidden="true"></i>

</a>
                  </form>

                  














                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab2">

                                    <h2 >Your Order List </h2>
                                    <div class="table-responsive" style="overflow-x:auto;">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                  <th>Order id </th>
                     
                     <th>Process Ids</th>
                     <th>Details</th>
                     <th>Product Price</th>
                     <th>Billing Address</th>
                     <th>Shipping Address</th>
                     <th>Total</th>
                     <th>Order time</th>
                     <th>Status</th>
                     
                     <th>Action</th>
                     <th>Return Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                     
                      <th>Order id </th>
                     
                      <th>Process Ids</th>
                      <th>Details</th>
                      <th>Product Price List</th>
                      <th>Billing Address</th>
                      <th>Shipping Address</th>
                      <th>Total Price</th>
                      <th>Order time</th>
                      <th>Status</th>
                      
                      <th>Action</th>
                      <th>Retrurn Status</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                
                foreach ($userOrderDetails as  $contact_list) {
                                   
                ?>


                    <tr>
                      
                      <td><?php echo $contact_list['order_id'];?></td>
                      
                      <td><?php echo $contact_list['txn_id'];?></td>
                      <td><?php echo $contact_list['details'];?></td>
                      <td><?php echo $contact_list['product_price'];?></td>
                      <td><?php echo $contact_list['bill_addr'];?></td>
                      <td><?php echo $contact_list['shipping_addr'];?></td>
                      <td><?php echo $contact_list['total'];?></td>
                      <td><?php echo $contact_list['order_time'];?></td>
                      
                      <td><?php 
                        if($contact_list['status']==0){

                          echo '<h4 class="cancel_order">Cancel Order</h4>';
                        }elseif($contact_list['status']==1){
                          echo '<h4 class="accept_order">Order Accept</h4>';


                        }elseif($contact_list['status']==2){
                            echo '<h4 class="accept_order">Order Confirm</h4>';
  
  
                          }elseif($contact_list['status']==3){
                            echo '<h4 class="accept_order">Order Delivered</h4>';
  
  
                          }elseif($contact_list['status']==4){
                            echo '<h4 class="accept_order">Order Onhold</h4>';
  
  
                          }
                       
                        
                        ?> </td>
                       



                        <td>
                         <!--  -->
                        
                        
                        <a class="btn btn-info edit_download_btn" href="admin/upload/<?php echo $contact_list['invoice']?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
Download Invoice </a>
<br>
<?php
if($contact_list['note']==0)
                        {

?>                            
<a class="btn btn-warning btn_rtn"  href="product_return.php?id=<?php echo $contact_list['id']; ?>"><i class="fa fa-undo" aria-hidden="true"></i>
                        Ask FOR Return </a> 
                          
       <?php

                        }else{

                        ?>


<button class="btn btn-info btn_rtn" href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                          Return request sumbited </button>



      
<?php

}

?>




</td>



<td>

<?php 
                        if($contact_list['note']==0){

                          echo '<h4 >Return rejected</h4>';
                        }elseif($contact_list['note']==1){
                          echo '<h4 >Return Accept</h4>';


                        }elseif($contact_list['note']==2){
                            echo '<h4 >Request On Hold</h4>';
  
  
                          }elseif($contact_list['note']==3){
                            echo '<h4 >Request Approved</h4>';
  
  
                          }elseif($contact_list['note']==4){
                            echo '<h4 >Return Completed</h4>';
  
  
                          }else{
                            echo '<h4 >No Status</h4>';
  
  
                          }
                       
                        
                        ?>




</td>
                      
                      
                    </tr>
                    
                    <?php
                       }
                
                      ?>
                  </tbody>
                </table>
                    </div>
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
                                    <li><a href="faq.php">FAQ</a></li>
                                    <!-- <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Documentation</a></li> -->
                                    <li><a href="refund_policy.php">Refund policy</a></li>
                                    <li><a href="request_pc.php">Enquery</a></li>
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
                                <h3>Product We Use</h3>
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
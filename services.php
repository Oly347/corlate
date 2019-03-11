<?php
// Include config file

include ('admin/system/database.php');
include ('admin/employee.cls.php');


$obj_emp = new employee_inc ;
session_start();

if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    
} 
else {
  echo "<script type='text/javascript'>alert('Please Login To Continue!!!');
  window.location='user_login.php';
  </script>";
}



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

$obj_comp = new component_inc ;


//$rowPrice = $obj_emp->getPrice();

$rowCPUComponent = $obj_comp->getComponentDetailsCPUForUser();
$rowMBComponent = $obj_comp->getComponentDetailsMBForUser();
$rowCABComponent = $obj_comp->getComponentDetailsCABForUser();
$rowSMPSComponent = $obj_comp->getComponentDetailsSMPSForUser();
$rowHDDComponent = $obj_comp->getComponentDetailsHDDForUser();
$rowMemoryComponent = $obj_comp->getComponentDetailsRAMForUser();
$rowGraphicComponent = $obj_comp->getComponentDetailsGCARDForUser();
$rowSoundComponent = $obj_comp->getComponentDetailsSoundCard();
$rowDVDComponent = $obj_comp->getComponentDetailsDvdDrive();
$rowWirelessAdapterComponent = $obj_comp->getComponentDetailsWirelessAdapter();
$rowSSDComponent = $obj_comp->getComponentDetailsSSD();






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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'>
    <style>
    body{overflow-x: hidden;}
        
    </style>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" > -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
                        <li class="active"><a href="services.php">Assemble PC</a></li>
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
        <h1>Custome PC Assemble </h1>
    </div>
    
    <section id="services" class="service-item">
        <div class="container edit_pc_assable_container ">
            <!-- <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div> -->

            <div class="row">

                <form id="regForm" action="employee.dml.php" method="post">


                <!-- <input class="form-control" id="myInput" type="text" placeholder="Search.." value="intel" readonly> -->
  <h1>Choose Your PC</h1>
  
  <div class="tab tab1" style="overflow-x:auto;" >Choose Your CPU
  <input class="form-control search_box" id="myInput" type="text" placeholder="Search..">
    <div class="table-responsive" style="padding: 10px;">
        <table class="table  table-borderless  " id="myTable" style="margin-top:10px" >
          <thead>
            <tr>
              <th>CPU Name</th>
              <th>DIscription</th>
              <th>Image</th>
              <th>Price</th>
              <th >Choose your option</th>
            </tr>
          </thead>
          <tbody>

          <?php
                
                    foreach ($rowCPUComponent as  $row_cpu_component) {
                                       
                    ?>
            <tr>
              <td><?php echo $row_cpu_component['component_name'];?></td>
              <td><?php echo $row_cpu_component['component_details'];?></td>
              
              <td><img src ="admin/upload/<?php echo $row_cpu_component['component_image'];?>" height=50 width=80 /> </td>
              <td><?php echo $row_cpu_component['component_price'];?></td>
              <td><input type="radio" class="option-input radio" name="CPU"  value="<?php echo $row_cpu_component['id'];?>" /></td>
            </tr>
            <?php
                       }
                
                      ?>
            <!-- <tr>
              <td>
                <input type="radio" name="radios" id="radio2" value="2"/>
                <input type="text"  disabled value="JNE">
                <input type="radio" name="radios" id="radio2" value="2"/>
               -- <label for="radio2">JNE</label> -->
              
            
          </tbody>
        </table>
        <!-- <button type="button"  id="cpuNext">Next</button> -->
        <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
       

      </div>

      <div class="form-actions">
      <button type="button"  id="cpuNext">Next</button>
                      </div>

                      <style>
        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: right;
        }
        </style>
    


      
    </div>
    <div class="tab tab1" style="overflow-x:auto;" >Choose Your Cabenet
      <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->

      <input class="form-control search_box" id="myInput1" type="text" placeholder="Search..">
      <div class="table-responsive">
          <table class="table table-borderless" id="myTable1">
            <thead>
              <tr>
                <th>Cabinat Name</th>
                <th>Discription</th>
                <th>Image</th>
                <th>Price</th>
                <th >Choose your option</th>
              </tr>
            </thead>
            <tbody>

          <?php
                
                    foreach ($rowCABComponent as  $row_cpu_component) {
                                       
                    ?>
            <tr>
              <td><?php echo $row_cpu_component['component_name'];?></td>
              <td><?php echo $row_cpu_component['component_details'];?></td>
              
              <td><img src ="admin/upload/<?php echo $row_cpu_component['component_image'];?>" height=50 width=80 /> </td>
              <td><?php echo $row_cpu_component['component_price'];?></td>
              <td><input type="radio" class="option-input radio" name="CAB"  value="<?php echo $row_cpu_component['id'];?>"  ></td>
            </tr>
            <?php
                       }
                
                      ?>
            <!-- <tr>
              <td>
                <input type="radio" name="radios" id="radio2" value="2"/>
                <input type="text"  disabled value="JNE">
                <input type="radio" name="radios" id="radio2" value="2"/>
               -- <label for="radio2">JNE</label> -->
              
            
          </tbody>
          </table>

          <button type="button" id="cabNext">Next</button>
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        </div>
        
  
      
  
      
        
      </div>
      <!-- <script>
$(document).ready(function(){
  $("#myInput1").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->

   
      <div class="tab tab1" style="overflow-x:auto;" >Choose Your SMPS
          <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
          <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
          <input class="form-control search_box" id="myInput2" type="text" placeholder="Search..">
          <div class="table-responsive">
              <table class="table table-borderless" id="myTable2">
                <thead>
                  <tr>
                    <th>SMPS Name</th>
                    <th>Discription</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th >Choose your option</th>
                  </tr>
                </thead>
                                      <tbody>

                      <?php
                            
                                foreach ($rowSMPSComponent as  $row_smps_component) {
                                                  
                                ?>
                        <tr>
                          <td><?php echo $row_smps_component['component_name'];?></td>
                          <td><?php echo $row_smps_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_smps_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_smps_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="SMPS"  value="<?php echo $row_smps_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
              </table>
              <button type="button" id="smps">Next</button>
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            </div>
      
          
      
          
            
          </div>




          <div class="tab tab1" style="overflow-x:auto;" >Choose Your Motherboard
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->

              <input class="form-control search_box" id="myInput3" type="text" placeholder="Search..">
              <div class="table-responsive">
                  <table class="table table-borderless" id="myTable3">
                    <thead>
                      <tr>
                        <th>Mother Board Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                                      <tbody>

                      <?php
                            
                                foreach ($rowMBComponent as  $row_motherboard_component) {
                                                  
                                ?>
                        <tr>
                          <td><?php echo $row_motherboard_component['component_name'];?></td>
                          <td><?php echo $row_motherboard_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_motherboard_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_motherboard_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="MB"  value="<?php echo $row_motherboard_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                  </table>


                  <button type="button" id="mbnext">Next</button>
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                </div>
          
              
          
              
                
              </div>

              <div class="tab tab1" style="overflow-x:auto;" >Choose Your Hard Disk Drive
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <input class="form-control search_box" id="myInput4" type="text" placeholder="Search..">
              <div class="table-responsive">
                  <table class="table table-borderless" id="myTable4">
                    <thead>
                      <tr>
                        <th>HDD Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                      <tbody>

                      <?php
                            
                      foreach ($rowHDDComponent as  $row_harddrive_component) {
                                                  
                      ?>
                        <tr>
                          <td><?php echo $row_harddrive_component['component_name'];?></td>
                          <td><?php echo $row_harddrive_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_harddrive_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_harddrive_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="HDD"  value="<?php echo $row_harddrive_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                     
                  </table>


                  <button type="button" id="hddnext">Next</button>
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                </div>
          
              
          
              
                
              </div>
              <div class="tab tab1" style="overflow-x:auto;" >Choose Your Memory(RAM) *  &nbsp; you can choose ram quantity in confirm page
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <input class="form-control search_box" id="myInput5" type="text" placeholder="Search..">
              <div class="table-responsive" id="myTable5">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>RAM Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                      <tbody>

                      <?php
                            
                      foreach ($rowMemoryComponent as  $row_memory_component) {
                                                  
                      ?>
                        <tr>
                          <td><?php echo $row_memory_component['component_name'];?></td>
                          <td><?php echo $row_memory_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_memory_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_memory_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="RAM"  value="<?php echo $row_memory_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                  </table>

                  <button type="button" id="ramnext">Next</button>
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                </div>
          
              
          
              
                
              </div>

              <div class="tab tab1" style="overflow-x:auto;" >Choose Your Graphic card
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <input class="form-control search_box" id="myInput6" type="text" placeholder="Search..">
              <div class="table-responsive">
                  <table class="table table-borderless" id="myTable6">
                    <thead>
                      <tr>
                        <th>Graphic Card Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                      <tbody>

                      <?php
                            
                      foreach ($rowGraphicComponent as  $row_graphic_component) {
                                                  
                      ?>
                        <tr>
                          <td><?php echo $row_graphic_component['component_name'];?></td>
                          <td><?php echo $row_graphic_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_graphic_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_graphic_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="GCARD"  value="<?php echo $row_graphic_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                  </table>
                  <button type="button" id="gcardnext">Next</button>
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                </div>
          
              
          
              
                
              </div>

              <!-- <div class="tab tab4" >User Name
              <p><input placeholder="Username..." oninput="this.className = ''" name="email_id" ></p>
              
              </div> -->


              <!-- <input type="hidden" name="temp_id"  class="form-control" value=""></p> -->
              
              
  <div style="overflow:auto;">
    <div style="float:right; margin-top: 10px;">
      <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="display:none">Previous</button> -->
      <button type="button" id="nextBtn" onclick="nextPrev(1)" style="display:none">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step">1</span>
    <span class="step">2</span>
    <span class="step">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
    <span class="step">6</span>
    <span class="step">7</span>
    <!-- <span class="step"></span> -->
    
  </div>
</form>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->



    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead edit_p_partner" style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
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
<script>


$('.table tbody tr').click(function(event) {
  if (event.target.type !== 'radio') {
    $(':radio', this).trigger('click');
  }
});
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

// function validateForm() {
//   // This function deals with validation of the form fields
  
//        var cpu = document.getElementsByName('CPU');
//        //var cab = document.getElementsByName('CAB');
//         var genValue = false;

//         for(var i=0; i<cpu.length;i++){
//             if(cpu[i].checked == true){
//                 genValue = true;    
//             }
//         }
//         if(!genValue){
//           sweetAlert("Oops...", "Please choose your option!", "error");
//             return false;
//         }

//   if (genValue) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return genValue; // return the valid status
// }




function validateForm() {
  // This function deals with validation of the form fields
  
       var cpu = document.getElementsByName('CPU');
       //var cab = document.getElementsByName('CAB');
        var genValue = false;

        for(var i=0; i<cpu.length;i++){
            if(cpu[i].checked == true){
                genValue = true;    
            }
        }
        if(!genValue){
          sweetAlert("Oops...", "Please choose your option!", "error");
            return false;
        }

  if (genValue) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return genValue; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

    <script src="js/jquery.js"></script>
    <script src="js/product_validation.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

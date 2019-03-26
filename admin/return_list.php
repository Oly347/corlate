<?php
session_start();

include ('system/database.php');
include ('employee.cls.php');


$obj_user = new user_inc ;

//$userReview = $obj_user->getReviewList();

$contactList = $obj_user->getReturnList();

// print_r($contactList);
// exit;
?>





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Tilottama.Tech <sup>ADMIN</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="home.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Components List</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">List Components:</h6>
        <a class="collapse-item" href="component_list.php">System Unit:</a>
        <a class="collapse-item" href="accessories.php">Monitor and accessories:</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Utilities:</h6>
        <a class="collapse-item" href="utilities-color.html">Colors</a>
        <a class="collapse-item" href="utilities-border.html">Borders</a>
        <a class="collapse-item" href="utilities-animation.html">Animations</a>
        <a class="collapse-item" href="utilities-other.html">Other</a>
      </div>
    </div>
  </li> -->



  <li class="nav-item">
<a class="nav-link" href="product_pc_list.php">
<i class="fas fa-fw fa-wrench"></i>
<span>Full PC List</span></a>
</li>



<li class="nav-item">
<a class="nav-link" href="add_pc.php">
<i class="fas fa-fw fa-plus"></i>
<span>Add PC</span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Addons
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-plus"></i>
      <span>Add Component </span>
    </a>
    <div id="collapsePages" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">System Unit:</h6>
        <a class="collapse-item" href="processor.php">Processor</a>
        <a class="collapse-item" href="motherboard.php">Motherboard</a>
        <a class="collapse-item" href="cabinet.php">Cabinet</a>
        <a class="collapse-item" href="smps.php">SMPS</a>
        <a class="collapse-item" href="harddrive.php">Hard Disk Drive</a>
        <a class="collapse-item" href="memory.php">Memory</a>
        <a class="collapse-item" href="ssd">SSD</a>
        <a class="collapse-item" href="graphic_card.php">Graphic Card</a>
        <!-- <a class="collapse-item" href="#">Video Card</a> -->
        <a class="collapse-item" href="sound_card.php">Sound Card</a>
        <a class="collapse-item" href="dvd_drive.php">DVD DRIVE</a>
        <a class="collapse-item" href="wireless_adapter.php">Wireless Adapter</a>
        <!-- <a class="collapse-item" href="#">Bluetooth Reciver</a> -->
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Monitor and accessories</h6>
        <a class="collapse-item" href="monitor.php">Monitor</a>
        <a class="collapse-item" href="mouse_keyboard.php">Mouse & Keyboard</a>
        <a class="collapse-item" href="speaker.php">Speaker</a>
        <a class="collapse-item" href="headphone.php">Headphone</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li> -->

  <!-- Nav Item - Tables -->
  <li class="nav-item">
<a class="nav-link" href="user_list.php">
<i class="fas fa-fw fa-table"></i>
<span>User List</span></a>
</li>



<li class="nav-item">
<a class="nav-link" href="review_list.php">
<i class="fas fa-fw fa-table"></i>
<span>Review List</span></a>
</li>


<li class="nav-item">
<a class="nav-link" href="contact_us_list.php">
<i class="fas fa-fw fa-table"></i>
<span>Contact us List</span></a>
</li>



<li class="nav-item">
<a class="nav-link" href="order_table.php">
<i class="fas fa-fw fa-table"></i>
<span> Order List</span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form> -->

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          
        </li>

        <!-- Nav Item - Alerts -->
        

        <!-- Nav Item - Messages -->
        

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['userName'];
?></span>
            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            
           <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Product Return Request List</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Product Return Request List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      
                    <th>User Name</th>
                    <th>Ticket Number</th>
                      <th>Order Id</th>
                      <th>Request Time</th>
                      <th>Issue</th>
                      <th>Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                  
                  <th>User Name</th>
                     <th>Ticket Number</th>
                      <th>Order Id</th>
                      <th>Request Time</th>
                      <th>Issue</th>
                      <th>Action</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                
                foreach ($contactList as  $contact_list) {
                                   
                ?>


                    <tr>
                    <td><?php echo $contact_list['username'];?></td>
                    <td><?php echo $contact_list['ticket_no'];?></td>
                      <td><?php echo $contact_list['order_id'];?></td>
                      <td><?php echo $contact_list['order_time'];?></td>
                      <td><?php echo $contact_list['issue'];?></td>
                     
                      <td>
                        <!-- <a class="btn btn-danger" href="" role="button">Delete</a> -->
                        <a class="btn btn-info" href="return_product_update.php?id=<?php echo $contact_list['id'];?>" role="button">Take Action</a>
                        </td>
                        <td><?php 
                        if($contact_list['status']==0){

                          echo '<button href="#" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                          </span>
                          <span class="text">Rejected</span>
                        </button>';
                        }elseif($contact_list['status']==2){
                          echo '<button href="#" class="btn btn-info btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">On Hold</span>
                        </button>';


                        }
                        elseif($contact_list['status']==3){
                            echo '<a href="#" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Approved</span>
                          </a>';
  
  
                          } elseif($contact_list['status']==4){
                            echo '<a href="#" class="btn btn-light btn-icon-split">
                            <span class="icon text-gray-600">
                              <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Completed</span>
                          </a>';
  
  
                          }


                          else{
                            echo '<button href="#" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Accepted</span>
                          </button>';
  
  
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

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

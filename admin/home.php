<?php
session_start();

include ('system/database.php');
include ('employee.cls.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true) {
//echo "Welcome to the member's area, " . $_SESSION['userName'] . "!";
} 
else {
header('Location:index.php');
}






$obj_user = new user_inc ;

$obj_comp = new component_inc ;

$userlistDetails = $obj_user->getTotalUserList();



// $CPUlistDetails = $obj_comp->getComponentDetailsCPUByList();
// $CABlistDetails = $obj_comp->getComponentDetailsCBByList();
// $SMPSlistDetails = $obj_comp->getComponentDetailsSMPSByList();
// $HDDlistDetails = $obj_comp->getComponentDetailsHDDByList();
// $RAMlistDetails = $obj_comp->getComponentDetailRAMByList();
// $GCARDlistDetails = $obj_comp->getComponentDetailGCByList();
// $SCARDlistDetails = $obj_comp->getComponentDetailSCByList();



foreach ($userlistDetails as $key => $value) {
  $total_user=$value['COUNT(id)'];
}




// foreach ($CPUlistDetails as $key => $value) {
//   $total_CPU=$value['COUNT(id)'];
// }
// foreach ($CABlistDetails as $key => $value) {
//   $total_CAB=$value['COUNT(id)'];
// }

// foreach ($SMPSlistDetails as $key => $value) {
//   $total_SMPS=$value['COUNT(id)'];
// }
// foreach ($HDDlistDetails as $key => $value) {
//   $total_HDD=$value['COUNT(id)'];
// }
// foreach ($RAMlistDetails as $key => $value) {
//   $total_RAM=$value['COUNT(id)'];
// }
// foreach ($GCARDlistDetails as $key => $value) {
//   $total_gcard=$value['COUNT(id)'];
// }
// foreach ($SCARDlistDetails as $key => $value) {
//   $total_scard=$value['COUNT(id)'];
// }



// $total_product=$total_CPU+$total_CAB+$total_SMPS+$total_HDD+$total_RAM+$total_gcard+$total_gcard  ;


//echo $total_product ;
// echo $total_SMPS

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tilottama.Tech Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="shortcut icon" href="favicon.ico">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
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


<li class="nav-item">
  <a class="nav-link" href="return_list.php">
    <i class="fas fa-fw fa-table"></i>
    <span> Return Request</span></a>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

      
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_user ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Total Earnings</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Successfully completed delivered</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100+</div>
                        </div>
                        <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Successfully completed delivered </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->


         


      

          </div>
      </div>


      <div class='calendar'>
  <div class='day'></div>
  <div class='month'>
    <div class='month-name'></div>
  </div>
  <div class='number'></div>
</div>
<div class='contain'>
  <div class='caltwo'>
    <div class='daytwo'></div>
    <div class='monthtwo'></div>
    <div class='numtwo'></div>
  </div>
  <div class='clock'>
    <div class='hour time'></div>
    <div class='min time'></div>
    <div class='sec time'></div>
  </div>
</div>
<!-- <div class='meter'>
  <div class='hours timer'></div>
  <div class='minutes timer'></div>
  <div class='seconds timer'></div>
</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="js/index.js"></script>
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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

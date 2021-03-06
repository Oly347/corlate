<?php
// Include config file


session_start();

// //create a session and assign a value
// $_SESSION['session_id'] =rand(10,1000);



//print session
// print($_SESSION['session_id']);
//remove/destroy particular session or
// unset($_SESSION['session_name']);
// //destroy all the sessions'
// // remove all session variables
// session_unset();
// // destroy the session
// session_destroy();

include ('system/database.php');
include ('employee.cls.php');


$obj_comp = new component_inc ;

$rowProductPCList = $obj_comp->getPCProductByID($_GET['id']);
// echo "<pre>";
// print_r($rowProductPCList);
// echo "</pre>";

// exit;



foreach ($rowProductPCList as $key => $value) {
  $product_no=$value['product_no'];
  $product_price=$value['product_price'];
  $product_img=$value['product_img'];
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
  $tag=$value['tag'];



}

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
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
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Components:</h6>
            <a class="collapse-item" href="component_list.php">System Unit:</a>
            <a class="collapse-item" href="cards.html">Monitor and accessories:</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
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
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Component</span>
        </a>
        <div id="collapsePages" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">System Unit:</h6>
            <a class="collapse-item active" href="processor.php">Processor</a>
            <a class="collapse-item" href="#">Motherboard</a>
            <a class="collapse-item" href="#">Cabinet</a>
            <a class="collapse-item" href="#">SMPS</a>
            <a class="collapse-item" href="#">Hard Disk Drive</a>
            <a class="collapse-item" href="#">Memory</a>
            <a class="collapse-item" href="#">SSD</a>
            <a class="collapse-item" href="#">Graphic Card</a>
            <a class="collapse-item" href="#">Video Card</a>
            <a class="collapse-item" href="#">Sound Card</a>
            <a class="collapse-item" href="#">DVD DRIVE</a>
            <a class="collapse-item" href="#">WIFI Reciver</a>
            <a class="collapse-item" href="#">Bluetooth Reciver</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Monitor and accessories</h6>
            <a class="collapse-item" href="#">Monitor</a>
            <a class="collapse-item" href="#">Mouse & Keyboard</a>
            <a class="collapse-item" href="#">Speaker</a>
            <a class="collapse-item" href="#">Headphone</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
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
          <h1 class="h3 mb-4 text-gray-800">Edit Product=>PC(without monitor & accessories)</h1>


          <div class="container">
  <h2>Component Details</h2>
  <form action="edit_pc.dml.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="product_no">Product Number</label>
      <input type="text" class="form-control" id="product_no" placeholder="Enter Product Number" name="product_no" value="<?php echo $product_no; ?>">
      <input type="hidden" name="emp_id"  class="form-control" value="<?php echo $_GET['id']; ?>">
    </div>

    <div class="form-group">
      <label for="product_price">Product price</label>
      <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price" name="product_price" value="<?php echo $product_price; ?>">
    </div>
    <div class="form-group">
      <label for="product_img">Product Image</label>
     
      <input type="file" class="form-control" id="product_img"  name="product_img" value="<?php echo $product_img; ?>">
    </div>



    <div class="form-group">
      <label for="product_img">Tag</label>
      <input type="text" class="form-control" id="tag"  name="tag" value="<?php echo $tag; ?>">
    </div>
    <div class="form-group">
      <label for="cabinet">Cabinet</label>
      <input type="text" class="form-control" id="cabinet" placeholder="Enter Cabinet Name" name="cabinet" value="<?php echo $cabinet; ?>">
    </div>
    <div class="form-group">
      <label for="product_weight">Product Weight</label>
      <input type="text" class="form-control" id="product_weight" placeholder="Enter Product Weight" name="product_weight" value="<?php echo $product_weight; ?>">
    </div>
    <div class="form-group">
      <label for="product_dimensions">Product Dimensions</label>
      <input type="text" class="form-control" id="product_dimensions" placeholder="Enter Product Dimensions" name="product_dimensions" value="<?php echo $product_dimensions; ?>">
    </div>
    <div class="form-group">
      <label for="processor_brand">Processor Brand</label>
      <input type="text" class="form-control" id="processor_brand" placeholder="Enter Processor Brand" name="processor_brand" value="<?php echo $processor_brand; ?>">
    </div>
    <div class="form-group">
      <label for="processor_type">Processor Type</label>
      <input type="text" class="form-control" id="processor_type" placeholder="Enter Processor Type" name="processor_type" value="<?php echo $processor_type; ?>">
    </div>
    <div class="form-group">
      <label for="product_no">RAM Size</label>
      <input type="ram_size" class="form-control" id="ram_size" placeholder="Enter RAM size" name="ram_size" value="<?php echo $ram_size; ?>">
    </div>
    <div class="form-group">
      <label for="ram_type">RAM Type</label>
      <input type="text" class="form-control" id="ram_type" placeholder="Enter RAM Type" name="ram_type" value="<?php echo $ram_type; ?>">
    </div>
    <div class="form-group">
      <label for="hard_disk_size">Hard Drive Size</label>
      <input type="text" class="form-control" id="hard_disk_size" placeholder="Enter Hard Drive Size" name="hard_disk_size" value="<?php echo $hard_disk_size; ?>">
    </div>
    <div class="form-group">
      <label for="hard_disk_tech">Hard Disk Technology</label>
      <input type="text" class="form-control" id="hard_disk_tech" placeholder="Ennter Hard Disk Technology" name="hard_disk_tech" value="<?php echo $hard_disk_tech; ?>">
    </div>
    <div class="form-group">
      <label for="operating_system">Operating System</label>
      <input type="text" class="form-control" id="operating_system" placeholder="Enter Operating sytem" name="operating_system" value="<?php echo $operating_system; ?>">
    </div>
    <div class="form-group">
      <label for="g_card">Graphic Card</label>
      <input type="text" class="form-control" id="g_card" placeholder="Enter Graphic card Details" name="g_card" value="<?php echo $g_card; ?>">
    </div>

    <div class="form-group">
      <label for="additional_information">Additional Information</label>
      <input type="text" class="form-control" id="additional_information" placeholder="Enter Additional Information" name="additional_information" value="<?php echo $additional_information; ?>">
    </div>
    

    <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" id="exampleFormControlSelect1" name="status" >
      <option value="0" >Deactive</option>
      <option value="1">Active</option>
      
    </select>
  </div>
    
    
    
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
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

</body>

</html>

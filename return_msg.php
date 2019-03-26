<?php

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


$userlastOrder = $obj_user->getUserlastReturnlist($_SESSION['userName']);

// print_r($userlastOrder);
// exit;

foreach ($userlastOrder as $key => $value) {
    $user_name=$value['username'];
    
    $ticket_no=$value['ticket_no'];
   

    
  
}


// echo "Hello" ." $user_name" . " your order is" .  "  $order"





?>



<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tilottama.Tech</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



 
 <script type="text/javascript">
  
 setTimeout(function () { swal("Thanks!!","Your Ticket No <?php echo $ticket_no ?> !","success")
  
}, 500);</script>;
  

</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">For Your Return Request</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">  Your Ticket No is <?php echo $ticket_no ?></p><br>
		<p class="main-content__body" data-lead-id="main-content-body">*Ticket Number is for further Enquiry, Please Save or Notedown the Ticket Number</p>

        <p class="lead">
    <b><a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to Shopping</a><b>
  </p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2019 | All Rights Reserved Tilottama.Tech</p>
	</footer>
</body>
</html>
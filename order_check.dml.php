<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


// if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
// $userID=$_SESSION['userName'];
// }
// else{
// $userID=$_SESSION['temp_user'];

// } 

$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$order_number = 'ORD' . $today . $rand ;

$details=$_POST['cabinet'].",".$_POST['product_weight'].",".$_POST['product_dimensions'].",".$_POST['processor_brand'].",".$_POST['processor_type'].",".$_POST['ram_size'].",".$_POST['ram_type'].",".$_POST['hard_disk_size'].",".$_POST['hard_disk_tech'].",".$_POST['operating_system'].",".$_POST['g_card'].",".$_POST['additional_information'];

// print_r($details);

// exit;


$obj_emp = new employee_inc ;

$insert_array=  array(
	
   'order_id' =>$order_number,
   'order_time' => date('Y-m-d'),
   'product_number' =>$_POST['product_no'],
   'product_details' =>$details,
   'product_price' =>$_POST['product_price'],
   'username' =>$_POST['username'],

);
     

$insert= $obj_emp->InsertIntoOrderCheck($insert_array);
     if ($insert) {
        //$_SESSION['view'] = true;
        header('Location:user_dashboard.php');
        exit();

       
    }else {
        header('Location:services.php?msg=something went wrong');
       
        exit();


}// class end









?>
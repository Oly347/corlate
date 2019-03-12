<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
$obj_user = new user_inc ;


if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

// then use the date functions, not the other way around
// $date = date("d/m/Y");
// $date1 =  date("H:i a");

// $mydate= $date ."-".$date1;


$insert_array=  array(
'order_id' => $_POST['order_id'],
'username' => $_POST['username'],
'txn_id' => $_POST['txn_id'],
'details' => $_POST['details'],
'product_price' => $_POST['product_price'],
'bill_addr' => $_POST['bill_addr'],
'shipping_addr' => $_POST['shipping_addr'],
'total' => $_POST['total'],
'order_time' =>date('Y-m-d H:i:s'),
	
    

);
     

$insert= $obj_user->InsertIntoOrderList($insert_array);
     if ($insert) {

        header('Location:order_msg.php');
        
        // echo "<script type='text/javascript'>alert('Thanks For Shopping ');
        // window.location='order_msg.php';
        // </script>";
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>
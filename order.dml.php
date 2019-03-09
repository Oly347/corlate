<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
$obj_user = new user_inc ;






$insert_array=  array(
'order_id' => $_POST['order_id'],
'username' => $_POST['username'],
'txn_id' => $_POST['txn_id'],
'details' => $_POST['details'],
'product_price' => $_POST['product_price'],
'bill_addr' => $_POST['bill_addr'],
'shipping_addr' => $_POST['shipping_addr'],
'total' => $_POST['total'],





   
	
	
    

);
     

$insert= $obj_user->InsertIntoOrderList($insert_array);
     if ($insert) {
        
        echo "<script type='text/javascript'>alert('Thanks For Shopping ');
        window.location='user_dashboard.php';
        </script>";
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>
<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
$obj_user = new user_inc ;


if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

$status = 1;


$insert_array=  array(
'order_id' => $_POST['order_id'],
'username' => $_POST['username'],
'issue' => $_POST['issue'],

'order_time' =>date('Y-m-d H:i:s'),
	
    

);



$update_array=  array(

    
    'note' => $status,  
    
    );
     


$update= $obj_user->SetUpdateOrder($update_array,$_POST['ord_id']);



$insert= $obj_user->InsertIntoReturnList($insert_array);
     if ($insert) {

        header('Location:index.php');
        
        // echo "<script type='text/javascript'>alert('Thanks For Shopping ');
        // window.location='order_msg.php';
        // </script>";
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>
<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
$obj_user = new user_inc ;


if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

$status = 1;
$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$transaction = $today . $rand ;

$insert_array=  array(
'order_id' => $_POST['order_id'],
'username' => $_POST['username'],
'issue' => $_POST['issue'],

'order_time' =>date('Y-m-d H:i:s'),
'ticket_no' =>$transaction,
	
    

);



$update_array=  array(

    
    'note' => $status,  
    
    );
     


$update= $obj_user->SetUpdateOrder($update_array,$_POST['ord_id']);



$insert= $obj_user->InsertIntoReturnList($insert_array);
     if ($insert) {

        header('Location:return_msg.php');
        
        // echo "<script type='text/javascript'>alert('Thanks For Shopping ');
        // window.location='order_msg.php';
        // </script>";
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>
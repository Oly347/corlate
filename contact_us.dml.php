<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
//session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


$obj_user = new user_inc ;


$insert_array=  array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone_number' => $_POST['phone_number'],
    'company_name' => $_POST['company_name'],
    'subject' => $_POST['subject'],
    'message' => $_POST['message'],
    
    
	
    

);
     

$insert= $obj_user->InsertIntoContactUS($insert_array);
     if ($insert) {
        
    header('Location:contact-us.php');
    echo '<script language="javascript">';
    echo 'alert(message successfully sent)';  //not showing an alert box.
    echo '</script>';
    exit;

       
    }else {
        header('Location:index.php');
        exit();


}// class end









?>
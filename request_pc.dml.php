<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

$obj_user = new user_inc ;


$insert_array=  array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone_number' => $_POST['phone_number'],
    'processer' => $_POST['processer'],
    'motherboard' => $_POST['motherboard'],
    'cabinet' => $_POST['cabinet'],
    'ram' => $_POST['ram'],
    'smps' => $_POST['smps'],
    'ssd' => $_POST['ssd'],
    'graphic_card' => $_POST['graphic_card'],
    'others' => $_POST['others'],
    'budget' => $_POST['budget'],
    'time' => date('Y-m-d H:i:s'),
    
    
	
    

);
     

$insert= $obj_user->InsertIntoRequestPC($insert_array);
     if ($insert) {
        
        echo "<script type='text/javascript'>alert('Thanks For Enquiry , We will contact with you soon !!');
        window.location='index.php';
        </script>";

    exit;

       
    }else {
        header('Location:index.php');
        exit();


}// class end









?>
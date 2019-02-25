<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
    $userID=$_SESSION['userName'];
    }
    else{
    $userID=$_SESSION['temp_user'];

} 
    

$obj_emp = new employee_inc ;

$insert_array=  array(
	'CPU' => $_POST['CPU'],
	'CAB' => $_POST['CAB'],
	'SMPS' => $_POST['SMPS'],
    'Morherboard' => $_POST['MB'],
    'Harddrive' => $_POST['HDD'],
    'RAM' => $_POST['RAM'],
    'GCARD' => $_POST['GCARD'],
    

    'Total' => $_POST['MB']+$_POST['SMPS']+$_POST['CAB']+$_POST['CPU'],
    // 'email_id' => $_POST['email_id'],
    'temp_id' => $userID,
    

);
     

$insert= $obj_emp->InsertIntoEmployees($insert_array);
     if ($insert) {
        //$_SESSION['view'] = true;
        header('Location:product_view.php');
        exit();

       
    }else {
        header('Location:services.php?msg=please choose all option');
       
        exit();


}// class end









?>
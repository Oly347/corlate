<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');



$obj_user = new user_inc ;




$f1=$_FILES['profile_pic']['name'];
$randomFileName = time().$f1;
$path='admin/upload/'.$randomFileName;
$t=$_FILES['profile_pic']['tmp_name'];
move_uploaded_file($t,$path);




$update_array=  array(

    'name' => $_POST['full_name'],
   
    'phone_number' => $_POST['phone_number'],
    
    'address' => $_POST['permanent_address'],
    'profile_pic' => $randomFileName,
    

);
     


   
	
$update= $obj_user->SetUpdateProfile($update_array,$_POST['user_id']);
     

if ($update) {
        
    header('Location:user_dashboard.php');
        exit();

       
    }else {
        // header('Location:update.php');
        exit();


}
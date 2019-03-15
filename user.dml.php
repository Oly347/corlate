<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();



$obj_user = new user_inc ;

$checkEmailUnique = $obj_user->checkEmailRegister($_POST['email_address']);



$l=count($checkEmailUnique);
if ($l>0) {
    echo "<script type='text/javascript'>alert('Email id already register! Try another email');
    window.location='user_register.php';
    </script>";

}
else
{


$f1=$_FILES['profile_pic']['name'];
$randomFileName = time().$f1;
$path='admin/upload/'.$randomFileName;
$t=$_FILES['profile_pic']['tmp_name'];
move_uploaded_file($t,$path);


$insert_array=  array(
    'name' => $_POST['full_name'],
    'password' => SHA1($_POST['password']),
    'phone_number' => $_POST['phone_number'],
    'email_id' => $_POST['email_address'],
    'address' => $_POST['permanent_address'],
    'profile_pic' => $randomFileName,
	
    

);
     

$insert= $obj_user->InsertIntoUserDetails($insert_array);
     if ($insert) {
        
        echo "<script type='text/javascript'>alert('Registration Successfully');
        window.location='index.php';
        </script>";

       
    }else {
        echo "<script type='text/javascript'>alert('Something Went wrong');
        window.location='index.php';
        </script>";
        exit();


}
}// class end








?>
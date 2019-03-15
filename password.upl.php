<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');



$obj_user = new user_inc ;




// $f1=$_FILES['c_pic']['name'];
// $randomFileName = time().$f1;
// $path='upload/'.$randomFileName;
// $t=$_FILES['c_pic']['tmp_name'];
// move_uploaded_file($t,$path);




$update_array=  array(

'password' => SHA1($_POST['password']),


);
     


   
	
$update= $obj_user->SetUpdateUserPassword($update_array,$_POST['user_id']);
     

if ($update) {
        
    echo "<script type='text/javascript'>alert('password  change successfully');
    window.location='user_dashboard.php';
    </script>";
        exit();

       
    }else {
        // header('Location:update.php');
        exit();


}





?>
<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
$obj_user = new user_inc ;






$insert_array=  array(
'name' => $_POST['name'],
'review' => $_POST['review'],
'star' => $_POST['star'],
'time' => date('Y-m-d H:i:s'),


   
	
	
    

);
     

$insert= $obj_user->InsertIntoReviewList($insert_array);
     if ($insert) {
        
        echo "<script type='text/javascript'>alert('Thanks for Review');
        window.location='user_dashboard.php';
        </script>";
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>
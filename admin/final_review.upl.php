<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
$obj_user = new user_inc ;






$update_array=  array(
'name' => $_POST['name'],
'review' => $_POST['review'],
'star' => $_POST['star'],
'time' => $_POST['time'],
'status' => $_POST['status'],


   
	
	
    

);
     



$update= $obj_user->SetUpdateReview($update_array,$_POST['review_id']);
     

if ($update) {
        
    echo "<script type='text/javascript'>alert('Review approved');
    window.location='review_list.php';
    </script>";
    exit();


       
}else {
    echo "<script type='text/javascript'>alert('Not Approved');
    window.location='review_list.php';
    </script>";
        exit();


}




?>
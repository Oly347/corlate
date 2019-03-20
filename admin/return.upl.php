<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
$obj_user = new user_inc ;






$update_array=  array(

'status' => $_POST['status'],


   

);


     



$update= $obj_user->SetUpdateReturnProduct($update_array,$_POST['review_id']);
     

if ($update) {
        
    echo "<script type='text/javascript'>alert('status Update');
    window.location='return_list.php';
    </script>";
    exit();


       
}else {
    echo "<script type='text/javascript'>alert('Not Approved');
    window.location='return_list.php';
    </script>";
        exit();


}




?>
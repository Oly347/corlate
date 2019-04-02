<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
$obj_comp = new component_inc ;






$insert_array=  array(
'code' => $_POST['c_name'],
'discount' => $_POST['c_price'],
'discription' => $_POST['c_dis'],
'min_amt' => $_POST['c_amt'],
'status' => $_POST['status'],

   
	
	
    

);
     

$insert= $obj_comp->InsertIntocp($insert_array);
     if ($insert) {
        
        header('Location:accessories.php');
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>
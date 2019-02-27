<?php

include ('admin/system/database.php');
include ('admin/employee.cls.php');

session_start();
$obj_comp = new component_inc ;




$delete= $obj_comp->DeleteCartItem($_POST['cart_id']);
if ($delete) {        
header('Location:user_dashboard.php');
exit();
}
else{
header('Location:user_dashboard.php');
}
?>
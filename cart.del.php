<?php

include ('admin/system/database.php');
include ('admin/employee.cls.php');

session_start();
$obj_comp = new component_inc ;




$delete= $obj_comp->DeleteCartItemByUser($_SESSION['userName']);



if ($delete) {        
header('Location:user_dashboard.php#tab5');
exit;
}
else{
    header('Location:user_dashboard.php');
}
?>
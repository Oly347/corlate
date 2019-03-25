<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');



$cpu=$_POST['CPU'];


echo $cpu ;


$rowMBComponent = $obj_comp->getComponentDetailsMBForUser();



?>
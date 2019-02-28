<?php

//$_GET['price'] // array('web-design', 'web-development')



// echo "<pre>";
// var_dump($_POST);include ('admin/system/database.php');
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();


    




$obj_comp = new component_inc ;
//$userSavedItem = $obj_comp->getUserSavedItem($_SESSION['userName']);

//$userCartItem = $obj_comp->getUserCartItemByID($_POST['id']);

// print_r($userCartItem);
//$userCartItem = $obj_comp->getUserCartItemByID($_POST['id']);


//exit;
foreach($_POST['id'] as $id) {

$userCartItem = $obj_comp->getUserCartItemByID($id);



print_r($userCartItem);


 }
 exit;
     

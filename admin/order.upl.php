<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');



$obj_user = new user_inc ;

$orderid=$_POST['order_id'];

// print_r($orderid);
// exit;

$f1=$_FILES['c_pic']['name'];
$randomFileName = $orderid.$f1;
$path='upload/'.$randomFileName;
$t=$_FILES['c_pic']['tmp_name'];
move_uploaded_file($t,$path);



// $update_array=  array(
// 'status' => $_POST['status'],  
// 'invoice' => $randomFileName, 
// );



if(!empty($_FILES['c_pic']['name'])) //new image uploaded
{
    
    $update_array=  array(
        'status' => $_POST['status'],  
        'invoice' => $randomFileName, 
    );
}
else 
{
   
   $update_array=  array(

    
    'status' => $_POST['status'],  
    
    );


}  


     


   
	
$update= $obj_user->SetUpdateOrder($update_array,$_POST['ord_id']);
     

if ($update) {
        
    header('Location:order_table.php');
        exit();

       
    }else {
        header('Location:order_table.php');
        exit();


}





?>
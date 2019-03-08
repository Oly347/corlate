<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');



$obj_comp = new component_inc ;




$f1=$_FILES['c_pic']['name'];
$randomFileName = time().$f1;
$path='upload/'.$randomFileName;
$t=$_FILES['c_pic']['tmp_name'];
move_uploaded_file($t,$path);




$update_array=  array(

'component_name' => $_POST['c_name'],
'component_details' => $_POST['c_dis'],
'component_price' => $_POST['c_price'],
'component_image' => $randomFileName,
'status' => $_POST['status'],

);
     


   
	
$update= $obj_comp->SetUpdateSpeaker($update_array,$_POST['headphone_id']);
     

if ($update) {
        
    header('Location:accessories.php');
        exit();

       
    }else {
        // header('Location:update.php');
        exit();


}





?>
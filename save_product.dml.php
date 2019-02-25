<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');
$obj_comp = new component_inc ;




// $f1=$_FILES['product_img']['name'];
// $randomFileName = time().$f1;
// $path='upload/'.$randomFileName;
// $t=$_FILES['product_img']['tmp_name'];
// move_uploaded_file($t,$path);

$insert_array=  array(
'user_name' => $_POST['user_name'],
'cpu_model' => $_POST['cpu_model'],
'cpu_price' => $_POST['cpu_price'],
'cab_model' => $_POST['cab_model'],
'cab_price' => $_POST['cab_price'],
'smps_model' => $_POST['smps_model'],
'smps_price' => $_POST['smps_price'],
'mboard_model' => $_POST['mboard_model'],
'mboard_price' => $_POST['mboard_price'],
'hdrive_model' => $_POST['hdrive_model'],
'hdrive_price' => $_POST['hdrive_price'],
'memory_model' => $_POST['memory_model'],
'memory_price' => $_POST['memory_price'],
'gcard_model' => $_POST['gcard_model'],
'gcard_price' => $_POST['gcard_price'],
'total' => $_POST['total'],
// 'product_price' => $_POST['product_price'],
// 'product_img' => $randomFileName,
// 'cabinet' => $_POST['cabinet'],
// 'product_weight' => $_POST['product_weight'],
// 'product_dimensions' => $_POST['product_dimensions'],
// 'processor_brand' => $_POST['processor_brand'],
// 'processor_type' => $_POST['processor_type'],
// 'ram_size' => $_POST['ram_size'],
// 'ram_type' => $_POST['ram_type'],
// 'hard_disk_size' => $_POST['hard_disk_size'],
// 'hard_disk_tech' => $_POST['hard_disk_tech'],
// 'operating_system' => $_POST['operating_system'],
// 'g_card' => $_POST['g_card'],
// 'additional_information' => $_POST['additional_information'],   

);
     

$insert= $obj_comp->InsertIntoSaveProduct($insert_array);
     if ($insert) {
        
        header('Location:user_dashboard.php');
        exit();

       
    }else {
        header('Location:index.php');
        exit();


}
<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
$obj_comp = new component_inc ;




$f1=$_FILES['product_img']['name'];
$randomFileName = time().$f1;
$path='upload/'.$randomFileName;
$t=$_FILES['product_img']['tmp_name'];
move_uploaded_file($t,$path);

$update_array=  array(
'product_no' => $_POST['product_no'],
'product_price' => $_POST['product_price'],
'product_img' => $randomFileName,
'cabinet' => $_POST['cabinet'],
'product_weight' => $_POST['product_weight'],
'product_dimensions' => $_POST['product_dimensions'],
'processor_brand' => $_POST['processor_brand'],
'processor_type' => $_POST['processor_type'],
'ram_size' => $_POST['ram_size'],
'ram_type' => $_POST['ram_type'],
'hard_disk_size' => $_POST['hard_disk_size'],
'hard_disk_tech' => $_POST['hard_disk_tech'],
'operating_system' => $_POST['operating_system'],
'g_card' => $_POST['g_card'],
'additional_information' => $_POST['additional_information'],   
'status' => $_POST['status'],
);
     



















if(!empty($_FILES['product_img']['name'])) //new image uploaded
{
   
    $update_array=  array(
        'product_no' => $_POST['product_no'],
        'product_price' => $_POST['product_price'],
        'product_img' => $randomFileName,
        'cabinet' => $_POST['cabinet'],
        'product_weight' => $_POST['product_weight'],
        'product_dimensions' => $_POST['product_dimensions'],
        'processor_brand' => $_POST['processor_brand'],
        'processor_type' => $_POST['processor_type'],
        'ram_size' => $_POST['ram_size'],
        'ram_type' => $_POST['ram_type'],
        'hard_disk_size' => $_POST['hard_disk_size'],
        'hard_disk_tech' => $_POST['hard_disk_tech'],
        'operating_system' => $_POST['operating_system'],
        'g_card' => $_POST['g_card'],
        'additional_information' => $_POST['additional_information'],   
        'status' => $_POST['status'],
        );//save to DB with new image name
}
else // no image uploaded
{
   // save data, but no change the image column in MYSQL, so it will stay the same value
   $update_array=  array(
    'product_no' => $_POST['product_no'],
    'product_price' => $_POST['product_price'],
    
    'cabinet' => $_POST['cabinet'],
    'product_weight' => $_POST['product_weight'],
    'product_dimensions' => $_POST['product_dimensions'],
    'processor_brand' => $_POST['processor_brand'],
    'processor_type' => $_POST['processor_type'],
    'ram_size' => $_POST['ram_size'],
    'ram_type' => $_POST['ram_type'],
    'hard_disk_size' => $_POST['hard_disk_size'],
    'hard_disk_tech' => $_POST['hard_disk_tech'],
    'operating_system' => $_POST['operating_system'],
    'g_card' => $_POST['g_card'],
    'additional_information' => $_POST['additional_information'],   
    'status' => $_POST['status'],
    );


    
}

$update= $obj_comp->SetUpdatePCProduct($update_array,$_POST['emp_id']);
     

if ($update) {
        
        header('Location:product_pc_list.php');
        exit();

       
    }else {
        header('Location:product_pc_list.php');
        exit();


}



?>
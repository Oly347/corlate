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
'username' => $_POST['username'],
'txn_id' => $_POST['txn_id'],
'details' => $_POST['details'],
'product_no' => $_POST['product_no'],
'product_price' => $_POST['product_price'],


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
     

$insert= $obj_comp->InsertIntoCartProduct($insert_array);
     if ($insert) {
        
        header('Location:user_dashboard.php');
        exit();

       
    }else {
        header('Location:index.php');
        exit();


}
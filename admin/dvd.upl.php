<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');



$obj_comp = new component_inc ;

if($_FILES["c_pic"]["error"])
{


} 
else {



}





// if(empty($_FILES['image']['name']))
// {
//     $image=$row['image'];
//     //upload from root folder//
//     $upload=$_SESSION['KCFINDER']['uploadURL'] = '/images'.$image;
//     upload script
// } else {
//     normal upload script
// }





// $f1=$_FILES['c_pic']['name'];
// $randomFileName = time().$f1;
// $path='upload/'.$randomFileName;
// $t=$_FILES['c_pic']['tmp_name'];
// move_uploaded_file($t,$path);


if(!empty($_FILES['c_pic']['name'])) //new image uploaded
{
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
    
    );//save to DB with new image name
}
else // no image uploaded
{
   // save data, but no change the image column in MYSQL, so it will stay the same value
   $update_array=  array(

    'component_name' => $_POST['c_name'],
    'component_details' => $_POST['c_dis'],
    'component_price' => $_POST['c_price'],
    
    'status' => $_POST['status'],  
    
    );
}

// $update_array=  array(

// 'component_name' => $_POST['c_name'],
// 'component_details' => $_POST['c_dis'],
// 'component_price' => $_POST['c_price'],
// 'component_image' => $randomFileName,
// 'status' => $_POST['status'],  

// );
     


   
	
$update= $obj_comp->SetUpdateDvdDrive($update_array,$_POST['dvd_id']);
     

if ($update) {
        
    header('Location:component_list.php');
        exit();

       
    }else {
        // header('Location:update.php');
        exit();


}





?>
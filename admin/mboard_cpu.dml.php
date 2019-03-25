<?php

include ('system/database.php');
include ('employee.cls.php');




$obj_comp = new component_inc;



$insert_array=  array(
    'cpu' => $_POST['c_processor'],
    'm_board' => $_POST['c_motherboard'],
    
);




    
$insert= $obj_comp->InsertIntoCpuMboardLink($insert_array);
if ($insert) {
   
    echo "<script type='text/javascript'>alert('link successfull');
        window.location='mboard_cpu.php';
        </script>";


  
}else {
    echo "<script type='text/javascript'>alert('link fail');
    window.location='mboard_cpu.php';
    </script>";



}

        




?>
<?php

//$_GET['price'] // array('web-design', 'web-development')



// echo "<pre>";
// var_dump($_POST);
// exit;
if(!empty($_POST['id']))
    {
        foreach($_POST['id'] as $id) {


        echo '<p>' .$id. '<p>';

     }
    }
    else{

        echo 'please select your choice';
    }

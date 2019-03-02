<?php






// foreach($_POST['process'] as $process) {


// //echo  $process;

// $r=implode(",",$process);

// echo $r;



$data = $_POST['process'];
//print_r ($data) ;

foreach ($data as $value) {
    
    
$interestedValues[] = $value;
}
    
$discrption = implode('--and--', $interestedValues);
    
echo $discrption ;







// foreach($_POST['price'] as $price) {


// echo '<p>' .$price. '<p>';
    
// }





// echo  $_POST['total'];

?>
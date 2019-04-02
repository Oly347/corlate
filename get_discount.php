<?php
	require_once 'conn.php';
	$coupon_code = $_POST['coupon'];
	$price = $_POST['price'];





	$query = mysqli_query($conn, "SELECT * FROM `coupon_code` WHERE `code` = '$coupon_code' && `status` = 'Valid'") or die(mysqli_error());
	$count = mysqli_num_rows($query);
	$fetch = mysqli_fetch_array($query);
	
	$minamount = $fetch['min_amt'] ;

	


	if($price < $minamount ){
		echo "error";


	}else{
	
	$query = mysqli_query($conn, "SELECT * FROM `coupon_code` WHERE `code` = '$coupon_code' && `status` = 'Valid'") or die(mysqli_error());
	$count = mysqli_num_rows($query);
	$fetch = mysqli_fetch_array($query);
	$array = array();
	if($count > 0){
		$discount = $fetch['discount'] ;
		$total = $discount;
		$array['discount'] = $fetch['discount'];
		$array['price'] = $price- $total;
		
		echo json_encode($array);
		
	}else{
		echo "error";
	}


}
?>
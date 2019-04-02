<?php 
session_start();
$couponcode = "2940230422"; // Get this value from a textbox somewhere.
$_SESSION['couponcode'] = $couponcode;


$total = "102.30"; //some sum of money
$couponquery = "SELECT * FROM `couponcodes` WHERE `code` = '".$_SESSION['couponcode']."' LIMIT 1";
if(mysql_num_rows($couponquery) == 1)
   {
      $totaltopay = ($total * 0.9);
      echo "Valid Coupon Code: Deducted 10% from Total.<br />"
      $deletecoupon = mysql_query("DELETE FROM `couponcodes` WHERE `code` = '".$_SESSION['couponcode']."' LIMIT 1") or die(mysql_error());
   }
else
   {
      $totaltopay = $total; 
	 }
	 
?>

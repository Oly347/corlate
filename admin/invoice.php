<?php
// Include config file


session_start();


include ('system/database.php');
include ('employee.cls.php');

$obj_user = new user_inc ;
$obj_comp = new component_inc ;
$orderRow = $obj_user->getOrderById($_GET['id']);

$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$transaction = 'TS' . $today . $rand ;

// $invoiceid = $order_id. $today  ;
$today_date = date("d/m/Y");


// 





foreach ($orderRow as $key => $value) {
  $order_id=$value['order_id'];
  $username=$value['username'];
  $txn_id=$value['txn_id'];
  $details=$value['details'];
  $product_price=$value['product_price'];
  $bill_addr=$value['bill_addr'];
  $shipping_addr=$value['shipping_addr'];
  $total=$value['total'];
  $order_time=$value['order_time'];
  

}
$userDetailsById = $obj_user->getUserById($username);


// print_r($userDetailsById);
foreach ($userDetailsById as $key => $value) {
	$name=$value['name'];
    $phone_number=$value['phone_number'];
    $address=$value['address'];
    $profile_pic=$value['profile_pic'];
    $email_id=$value['email_id'];
    $id=$value['id'];

	
  
}




$invoiceid = $_GET['id']."-". $today  ;








?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice-tilottama.tech</title>
		<link rel="stylesheet" href="pdf.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
	
		
	</head>
	<body>


	<div id="background">
  <p id="bg-text">Tilottama.Tech</p>

	<!-- <img alt="" src="tech_logo_dark.jpg" id="bg-text" class="water_img" width="350"> -->
	</div>

		<header>
			<h1>Invoice</h1>
			<address >
				<h3>Tilottama.Tech</h3>
				<p>M 108, Yojangandha Co-operative Housing Society, Garagachha,</p>
				<p>Baishnabghata Patuli Twp, Garia, Kolkata, West Bengal 700094</p>
				<p>(+91)82408 68110</p>
			</address>
			<span><img alt="" src="tech_logo_dark.jpg" width="150"></span>
		</header>
		<article>
			<!-- <h1>Recipient</h1> -->
			<address >
				<p>  <?php echo $name; ?> </p>

			
			</address><br>


			<div class="address_dtl" >
				<p>  <?php echo $shipping_addr; ?> <br></p>

			
</div>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span > <?php echo $invoiceid ;?> </span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $today_date ; ?> </span></td>
				</tr>
				
			</table>


			
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Order Id</span></th>
						<th><span >Order Details</span></th>
						<th><span >Product Price list</span></th>
						<th><span >Total</span></th>
						<!-- <th><span >Price</span></th> -->
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $order_id; ?></span></td>
						<td><span ><?php echo $details; ?> </span></td>
						<td><span ><?php  echo $product_price;?></span></td>
						<td><span ><span data-prefix><i class="fa fa-inr" aria-hidden="true"></i></span><?php echo $total;?> </span></td>
						
					</tr>
				
					
					
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix><i class="fa fa-inr" aria-hidden="true"></i></span><span><?php echo $total; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix><i class="fa fa-inr" aria-hidden="true"></i></span><span ><?php echo $total; ?></span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix><i class="fa fa-inr" aria-hidden="true"></i>
</span><span>0.00</span></td>
				</tr>
			</table>
		</article>




		<div class="terms_con">
		<p >Terms & condition: <i>Put yourself in the shoes of your clients’ customers and understand that they’re not all familiar with industry jargon and even accounting terms, such as “net 30.” Keep the language in your terms and conditions simple and user-friendly.</i> </p>
</div>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- support@tilottama.tech || Web :-tilottama.tech || Phone :- (+91)82408 68110 </p>
			</div>


			<!-- <a class="btn btn-info" href="print_invoice.php" role="button" >Invoice</a> -->

			

		</aside>

	
		

		<SCRIPT LANGUAGE="JavaScript">
if (window.print) {
document.write('<form><input type=button name=print value="Print invoice" onClick="javascript:window.print()"></form>');
}
</script>
	</body>
</html>


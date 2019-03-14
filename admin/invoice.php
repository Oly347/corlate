<?php
// Include config file


 session_start();

// //create a session and assign a value
// $_SESSION['session_id'] =rand(10,1000);



//print session
// print($_SESSION['session_id']);
//remove/destroy particular session or
// unset($_SESSION['session_name']);
// //destroy all the sessions'
// // remove all session variables
// session_unset();
// // destroy the session
// session_destroy();

include ('system/database.php');
include ('employee.cls.php');

$obj_user = new user_inc ;
$obj_comp = new component_inc ;
$orderRow = $obj_user->getOrderById($_GET['id']);

$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$transaction = 'TS' . $today . $rand ;

// $invoiceid = $order_id. $today  ;
$today_date = date("Y/m/d");





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

foreach ($userDetailsById as $key => $value) {
	$name=$value['name'];
    $phone_number=$value['phone_number'];
    $address=$value['address'];
    $profile_pic=$value['profile_pic'];
    $email_id=$value['email_id'];
    $id=$value['id'];

	
  
}




$invoiceid = $_GET['id']."-". $today  ;




// $stamp = imagecreatefrompng('stamp.png');
// $im = imagecreatefromjpeg('tech_logo_dark.jpg');

// // Set the margins for the stamp and get the height/width of the stamp image
// $marge_right = 10;
// $marge_bottom = 10;
// $sx = imagesx($stamp);
// $sy = imagesy($stamp);

// // Copy the stamp image onto our photo using the margin offsets and the photo 
// // width to calculate positioning of the stamp. 
// imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// // Output and free memory
// header('Content-type: image/png');
// imagepng($im);
// imagedestroy($im)



?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice-tilottama.tech</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
	/* background-image: url(tech_logo_dark.jpg);
	background-size: 10%;
    background-position:  center;
	background-attachment: fixed;
	background-repeat: no-repeat; */

	
}




/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { 
	
	background: #95d819; 
	border-radius: 0.25em; 
	color: #000; 
	margin: 0 0 1em; 
	padding: 0.5em 0; 
}
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; 

}
header address h3 { 
	
font-size:20px;
font-weight:bold;

}
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }



article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }
.address_dtl{
	float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 1em 2em 1em -10em; 
	width: 20%;
}


/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; 
}


.terms_con{

margin-bottom:15px;
}


.terms_con p{

font-size:10px
}

</style>
		
	</head>
	<body>




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
			<h1>Recipient</h1>
			<address >
				<p><?php echo "Mr. $name" ?> </p>

			
			</address><br>


			<div class="address_dtl" >
				<p><?php echo "Mr. $shipping_addr" ?> <br></p>

			
</div>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $invoiceid; ?></span></td>
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
						<td><span ><span data-prefix>&#x20b9;</span><?php echo $total;?> </span></td>
						
					</tr>
					
					
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>&#x20b9;</span><span><?php echo $total; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>&#x20b9;</span><span ><?php echo $total; ?></span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>&#x20b9;</span><span></span>0.00</td>
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
		</aside>

	



	</body>
</html>

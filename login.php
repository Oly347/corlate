<?php
//    include("config.php");
//    session_start();
include ('admin/system/database.php');
include ('admin/employee.cls.php');
session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


$obj_user = new user_inc ;
if($_SERVER["REQUEST_METHOD"] == "POST") {
//       // username and password sent from form 
      
//       $myusername = mysqli_real_escape_string($db,$_POST['email_id']);
//       $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
//       $sql = "SELECT id FROM user WHERE email_id = '$myusername' and password = '$mypassword'";
//       $result = mysqli_query($db,$sql);
//       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//       //$active = $row['active'];
      
//       $count = mysqli_num_rows($result);
      
//       // If result matched $myusername and $mypassword, table row must be 1 row
//        print_r($row);
       
//        exit;
//       if($count == 1) {
//          //session_register("myusername");

//          $_SESSION['user'] = $row;
         
//          header("location: welcome.php");
//          //echo $_GET[id];
//       }else {
//         $_SESSION['errMsg'] = "Invalid username or password";



//  }



$loginUser = $obj_user->checkLogin($_POST['email_id'],$_POST['password']);
$l=count($loginUser);
if ($l==1) {
foreach ($loginUser as $key => $value) {

 
 $_SESSION['user'] = $value['id'];  // user id from table
 $_SESSION['userName']= $value['email_id'];  // email or name
 $_SESSION['user_loggedin'] = true;   //logintrue
}
}
$l=count($loginUser);
if ($l==1) {
    
  header('Location:index.php');
}


// if ($l==1) {
        
  
// }

else {
  $_SESSION['errMsg'] = "Invalid username or password";
}
//header("Location: login.php");


}




?>






<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Login Tilottama.tech </title>
  
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css"> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body>

  


  
  

    <!-- <script  src="js/index.js"></script> -->



    <div class="login-card" ><img src="assets/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action = "" method = "post" enctype="multipart/form-data"><span class="reauth-email"> </span>
        <input class="form-control" type="email"  name="email_id" required="" placeholder="Email address" autofocus="" id="inputEmail">
        <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword">
            <!-- <div class="checkbox">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"></div>
    </div> -->
    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Login</button>
    <div id="errMsg">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
  </form>
  <a href="register.php"  class="btn btn-primary btn-outline" >I'm New <i class="fa fa-user-plus"></i></a>

 <a href="#"  class="btn btn-success btn-outline" style="float:right">forget Password <i class="fa fa-key" aria-hidden="true"></i></a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</div>

</body>

</html>

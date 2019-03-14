<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <style>
        #div_create_event {
            margin: 17px 0;
        }

        #img_preview_td {
            /* outline: 1px solid red; */
            width: auto;
            margin:10px;
        }

        img {
            height: 200px;
            width: 200px;
        }
    </style>
    <script>
    $(document).ready(function(){
        var i = 0;
        $("#add_more_img").click(function(e){
            i++;
            $("#dynamic_table_field").append('<tr id=row'+i+'><td><button name="remove" id="'+i
            +'" class="btn btn-danger btn-remove">X</button></td><td><input type="file" onchange="myfn(this)" name="event_images[]" id="event_images'+i
            +'" data-panelid="event_images'+i+'" class="form-control images_list" accept="image/gif, image/png, image/jpeg, image/pjpeg" />'
            +'</td><td id="img_preview_td"><img id="img_preview'+i+'" /></td></tr>');
            e.preventDefault();
        });

        $(document).on("click",".btn-remove",function(){
             var button_id = $(this).attr("id");
             $("#row"+button_id+"").remove();
        });
    });

      function myfn(myinput) {
            var name = $(myinput).attr("name");
            var id = $(myinput).attr("id");
            var val = $(myinput).val();
            debugger;
            switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
                case 'gif': case 'jpg': case 'png': case 'jpeg':
                    readURL(myinput);
                    break;
                default:
                    $(this).val('');
                    break;
            }
        }


        function readURL(myinput) {
           debugger;
            if (myinput.files && myinput.files[0]) {
                  var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img_preview' + $(myinput).attr("id").replace('event_images','') ).attr('src', e.target.result);
                }
                reader.readAsDataURL(myinput.files[0]);
            }
        }


    </script>
   
    <style>
@import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);

* {
  margin: 0;
  padding: 0;
  font-family: roboto;
}

/* body { background: #000; } */

.cont {
  width: 93%;
  max-width: 350px;
  text-align: center;
  margin: 4% auto;
  /* padding: 30px 0; */
  /* background: #111; */
  color: #EEE;
  border-radius: 5px;
  /* border: thin solid #444; */
  overflow: hidden;
}

hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  /* width: 270px; */
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 30px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>

    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

<header id="header">
         <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +0123 456 70 90</p> 
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <!-- <li><a class="btn-slide animation animated-item-3" href="#">Learn More</a><li> -->
                            </ul>
                            <div class="search">
                            <!-- <a href="#" class="btn btn-primary  active" role="button" aria-pressed="true">Primary link</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12" >
                        <div class="top-number " style="float:right">


                        <?php
                        if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] ==true) {
                            echo '<a href="logout.php" class="btn btn-imfo   active" role="button" aria-pressed="true">Logout</a>';
                            echo   $_SESSION['userName'];
                            echo '<a href="user_dashboard.php" class="btn btn-imfo   active" role="button" aria-pressed="true">Dash Board</a>';
                        } else {
                            echo '<a href="user_login.php" class="btn btn-info  active" role="button" aria-pressed="true">Login</a>';
                            
                        }
                        ?>
                        <!-- <a href="#" class="btn btn-primary   active" role="button" aria-pressed="true">Primary link</a> -->
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/tech-logo-for-dark.png" alt="logo" width="150" style="margin-top: -22px;" ></a>
                </div>

                <div class="collapse navbar-collapse navbar-right" style="margin-top: 40px;"> 
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Assemble PC</a></li>
                        <li><a href="smart_security_home.php">Smart Home security</a></li>
                        <li><a href="smart_home.php">Make your Home smart</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="blog.html">Blog</a></li> -->
                        <li><a href="contact-us.php">Contact</a></li>
                       
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Customer review</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Drop Your Review</h2>
                <!-- <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p> -->
            </div> 

            <p id="demo"></p>
            <div class="row contact-wrap"> 
                <!-- <div class="status alert alert-success" style="display: none"></div> -->
                <form  action="review.dml.php"  class="contact-form"  method="post"  enctype="multipart/form-data" >
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        
                        <div class="form-group">
                            
                            <input type="hidden" name="status" class="form-control" value="not_approved">
                        </div>

                        <div class="form-group">
                            <label>Write Review *(Max 250 Characters)</label>
                            <textarea name="review" id="message" required="required" class="form-control" maxlength="250"></textarea>
                        </div>  

                        
                        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

                        <div class="cont">
  <div class="stars">
    <form action="">
      <input class="star star-5" id="star-5-2" type="radio" name="star" value="5" />
      <label class="star star-5" for="star-5-2"></label>
      <input class="star star-4" id="star-4-2" type="radio" name="star" value="4" />
      <label class="star star-4" for="star-4-2"></label>
      <input class="star star-3" id="star-3-2" type="radio" name="star" value="3" />
      <label class="star star-3" for="star-3-2"></label>
      <input class="star star-2" id="star-2-2" type="radio" name="star" value="2" />
      <label class="star star-2" for="star-2-2"></label>
      <input class="star star-1" id="star-1-2" type="radio" name="star" value="1" />
      <label class="star star-1" for="star-1-2"></label>
    </form>
  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>


<!-- <table id="dynamic_table_field">
            <tr>
                <td><button name="add_more_img" id="add_more_img" class="btn btn-success">Add fields</button></td>
            </tr>
        </table> -->
    
                        <div class="form-group">
                            <button type="submit" name="submit"  class="btn btn-primary btn-lg">Submit Review</button>
                        </div>                     
                    </div>
                    <!-- <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        
                    </div> -->
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <!-- <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Thankyou for submit";
}
</script> -->

    
    <!--/#bottom-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a  href="index.php" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><b>Tilottama.Tech</b></a> All Rights Reserved
                    | Developed By <a  href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><i>Tilottama.Online</i></a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

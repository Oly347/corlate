<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square" title="Tilottama.Tech"></i><a href="tel:+918240868110"> +91 8240868110</a> &nbsp; &nbsp;<i class="fa fa-envelope-square" ></i> <a href="mailto:support@tilottama.tech?Subject=Hello%20again" target="_top">support@tilottama.tech</a></p> 
                            <!-- <p><i class="fa fa-phone-square"></i> +91 8240868110</p>  -->
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook" title="Tilottama.Tech"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" title="Tilottama.Tech"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" title="Tilottama.Tech"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
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
                            echo '<a href="user_dashboard.php" class="btn btn-imfo   active" role="button" aria-pressed="true">My Account</a>';
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
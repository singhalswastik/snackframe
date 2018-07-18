<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:04:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Snack Frame || Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        
        <!--All Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- datepicker css -->
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<!-- timepicker css -->
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css">
        <!-- venobox css -->
        <link rel="stylesheet" href="lib/venobox/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="contact-wraper">
    
    <!--header slider area are start-->
    <div class="header-slider-area common-page reser-page">  

    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="menu.php">Menu</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <?php
                          if(isset($_SESSION['username']))
                           {
                            ?><li style="color: white;"><?php echo $_SESSION['firstname']; ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <div class="mega-menu">
                               <ul>
                                  <li><a href="previous.php">Previous Orders</a></li>
                                  <li><a href="change_password.php">Change Password</a></li>
                                  <li><a href="logout.php">Logout</a></li>
                               </ul>
                            </div>
                           </li>
                           <?php
                            }
                            ?>
                                <?php
                           if(!isset($_SESSION['username']))
                            {echo '<li><a href="login.php">Login</a></li>
               <li><a href="register.php">Register</a></li>';}
               ?>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
</div> 
    <!--mobile menu area end--> 
    
    <!--header menu area are start-->
    <div class="header-menu-area">
    <!--header-area are start-->
    <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 hidden-xs">
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" height="200px" width="200px" alt="Snack Frame"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 hidden-xs">
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
</a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
</a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i>
</a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>
</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <!--header-area are end-->
    
    <!-- Main menu area are start  -->
    <div id="sticker" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<div class="logo2">
                      <a href="index.php"><img src="img/logo.png" alt=""></a>
                  </div>
                   <div class="main-menu">
                       <nav>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <?php
                          if(isset($_SESSION['username']))
                           {
                            ?><li style="color: white;"><?php echo $_SESSION['firstname']; ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <div class="mega-menu">
                               <ul>
                                  <li><a href="previous.php">Previous Orders</a></li>
                                  <li><a href="change_password.php">Change Password</a></li>
                                  <li><a href="logout.php">Logout</a></li>
                               </ul>
                            </div>
                           </li>
                           <?php
                            }
                            ?>
                            <?php
                           if(!isset($_SESSION['username']))
                            {echo '<li><a href="login.php">Login</a></li>
               <li><a href="register.php">Register</a></li>';}
               ?>
                        </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main menu area are end  -->     
    </div>
    <!--header menu area are end-->
    
    <!-- home slider start -->
    <div class="slider-container">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h1>Contact</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div> 
    </div>


    <!--contact area area start-->
    <div class="contact-area pt60 pb150">
        <div class="container">
                <div class="row">
                      <div class="col-md-6 col-sm-6 col-sm-12">
                         <div class="contact-text left-side">
                             <h2>We'd love to hear from you </h2>
                             
                            <div class="wpb_wrapper">
                                <div class="information-contact">
                                    <p><b>Address: </b>Hall 2</p>
                                    <p> <b>Phone: </b>7500100130</p>
                                    <p><b>Email: </b>snackframe@gmail.com</p>
                                </div>
                            </div>
                            <div class="social-share pb60">
                                <ul>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i>
                            </a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i>
                            </a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest-p"></i>
                            </a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i>
                            </a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-rss"></i>
                            </a></li>
                                </ul>
                            </div>
                         </div>  
                      </div>
                      <div class="col-md-6 col-sm-6 col-sm-12">
                          <div class="contact-text right-side">
                              <h2>Send A Message</h2>
                            <form action="http://demo.designshopify.com/html_lavie/lavie_resturant/thank-you.php" method="post">
                               <div class="first-last-name">
                                    <div class="input-box name1">
                                        <label>First Name</label>
                                        <input type="text" name="namm1" class="info" placeholder="First Name">
                                    </div>
                                    <div class="input-box name2">
                                        <label>Last Name</label>
                                        <input type="text" name="namm2" class="info" placeholder="Last Name">
                                    </div>
                               </div>
                                <div class="input-box">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="info" placeholder="Your Email">
                                </div>
                                <div class="input-box">
                                    <label>Message</label>
                                    <textarea name="message" class="area-tex" placeholder="Your Message*"></textarea>
                                </div>
                                <div class="input-box submt">
								 <input type="submit" class="com-btn blg-btn" value="Submit">
                                </div>
                                <div class="after-submit">
                                    please confirm the fields and submit it .
                                </div>
                            </form>
                          </div>
                      </div>
                </div>
        </div>
    </div>
    <!--contact area are end-->
      
    <!--map area are start-->
    <div class="map-area">
    <div id="googleMap"></div>
    
    </div>
    <!--map area are end-->
     
    <!--footer area are start-->
     <div class="footer-area pt60 pb60">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="single-footer text-center">
                        <div class="sosa-icon">
                            <img src="img/icon/icon-service.png" alt="">
                        </div>
                         <h1>Delivery Service</h1>
                         <div class="address">
                            <span>
                                Hall 2 <br>
                                <span class="email">snackframe@gmail.com</span>
                            </span>
                            <div class="phone-no">
                                <span>0123456789</span>
                            </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="single-footer footer-middle text-center">
                        <div class="sosa-icon">
                            <img src="img/icon/icon-time.png" alt="">
                        </div>
                         <h1>Opening Time</h1>
                        <div class="service-time">
                            <h2>LUNCH SERVICE</h2>
                            <span>Firday - Sunday :12pm -1.30pm</span>
                        </div>
                        <div class="service-time">
                            <h2>DINNER SERVICE</h2>
                            <span>Daily Booking available from 2pm - 2am</span>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="single-footer text-center">
                        <div class="sosa-icon">
                            <img src="img/icon/icon-letter.png" alt="">
                        </div>
                         <h1>Subscribe Us</h1>
                        <div class="detail-subs">
                            Subscribe to the <span>Snack Frame</span> newsletter to get <br> regular update about offers
                        </div>
                        <form action="#">
                            <div class="input-box">
                                <input class="newslatter" type="email" placeholder="Pur Entr Your email " name="newlatter">
                                <button title="Subscribe" type="submit" class="button"><i class="fa fa-paper-plane-o"></i></button>
                            </div>
                        </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <!--footer area are end-->
        
    <!--Copyright area are start--> 
      <div class="copyright-info pt60 pb60">
        <div class="container">
            <div class="row">
                <a href="index.php"><img src="img/logoft.png" alt=""></a>
			<p>Copyright © reserved .</p>
            </div>
        </div>
    </div>
    <!--Copyright area are end--> 
</div>
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
		<!-- timepicker js -->
        <script src="js/jquery.timepicker.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- nivo.slider js -->
        <script src="lib/js/jquery.nivo.slider.pack.js"></script>
        <script src="lib/js/nivo-active.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- Sticky JS -->	
        <script src="js/jquery.sticky.js"></script>
		<!-- venobox js -->
        <script src="lib/venobox/venobox.js"></script>
		<!-- google map  js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(23.81033, 90.41252)
                };
                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:04:03 GMT -->
</html>

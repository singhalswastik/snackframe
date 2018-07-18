<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:01:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Snack Frame || About-us</title>
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
    <div class="about-wraper">
    
    <!--header slider area are start-->
    <div class="header-slider-area common-page cart-page"> 
      
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav id="dropdown">
                            <ul>             
                                <li><a href="index.php">HOME</a></li>
                                 <li><a href="cart.php">Cart</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="menu.php">Menu</a></li>
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
                            <a href="index.php"><img src="img/logo.png" height="200px" width="200px" alt=""></a>
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
                            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true">
                            </i></a></li>
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
                <h1>About</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div> 
    </div>
    
    
    <!-- service holder area are start
    <div class="service-holder-area pt60 shape-holder">
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title text-center pb40">
                    <h1>About</h1>
                    <h2>Snack Frame</h2>
                    <div class="sec-img">
                        <img src="img/icon/iconh3_01.png" alt="">
                    </div>
                </div>
<div class="sm-des">
Phasellus 
</div>
           <div class="shape-team-img">
               <img src="img/chef1.jpg" alt="">
           </div>
            </div>
        </div>
    </div>
    </div>-->
    <!-- service holder area are end-->
    
    <!--about service area start--
    <div class="about-service-area pt60 pb60">
    <div class="service-area">
       <div class="container">
           <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-service text-center">
                <div class="service-icon">
                    <img src="img/author/service1.png" alt="">
                </div>
                <div class="service-title">
                    <h2>restaurant</h2>
                </div>
                <div class="service-text sm-des">
                    <p>
                        Sed ut perspiciatis unde omnis istenatus error voluptatem accusantium dolorem laudantium, to tam rem aperiames, eaque ipsa quae ab illo inventore veritatis et quasi.
                    </p>
                </div>
                <div class="read-btn">
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-service text-center">
                <div class="service-icon">
                    <img src="img/author/service2.png" alt="">
                </div>
                <div class="service-title">
                    <h2>Coffe Bar</h2>
                </div>
                <div class="service-text sm-des">
                    <p>
                        Sed ut perspiciatis unde omnis istenatus error voluptatem accusantium dolorem laudantium, to tam rem aperiames, eaque ipsa quae ab illo inventore veritatis et quasi.
                    </p>
                </div>
                <div class="read-btn">
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-service text-center">
                <div class="service-icon">
                    <img src="img/author/service3.png" alt="">
                </div>
                <div class="service-title">
                    <h2>Cupcake</h2>
                </div>
                <div class="service-text sm-des">
                    <p>
                        Sed ut perspiciatis unde omnis istenatus error voluptatem accusantium dolorem laudantium, to tam rem aperiames, eaque ipsa quae ab illo inventore veritatis et quasi.
                    </p>
                </div>
                <div class="read-btn">
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
           </div>
       </div>
    </div>
</div>
    <!--about service area start-->
     
    <!--about chef area are start-->
    <div class="about-chef-area pt60 pb60">
        <div class="container">
            <div class="row">
                <div class="total-chef-area" >
                    
					<div class="single-service-holder clearfix">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <div class="holder-img">
                          <a href="#"><img class="bcchu" src="img/team/swastik.jpg" alt=""></a>
                      </div>  
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="holder-content sm-des">
                            <div class="hc-title">
                                <h2>Swastik Singhal</h2>
                            </div>
                            <div class="deginaton">
                                <span>Full Stack Developer</span>
                            </div>
                        </div>
                        
                    </div>
                    </div>
					
					<div class="single-service-holder clearfix">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="holder-content sm-des">
                            <div class="hc-title">
                                <h2>Tanmay Jain</h2>
                            </div>
                            <div class="deginaton">
                                <span>Frontend Developer</span>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <div class="holder-img">
                          <a href="#"><img class="bcchu" src="img/team/tanmay.jpg" alt=""></a>
                      </div>  
                    </div>
                    </div>
					
					<div class="single-service-holder clearfix">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <div class="holder-img">
                          <a href="#"><img class="bcchu" src="img/team/sid.jpg" alt=""></a>
                      </div>  
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="holder-content sm-des">
                            <div class="hc-title">
                                <h2>Siddharth Poonia</h2>
                            </div>
                            <div class="deginaton">
                                <span>Backend Developer</span>
                            </div>
                        </div>
                        
                    </div>
                    </div>
					
					<div class="single-service-holder clearfix">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="holder-content sm-des">
                            <div class="hc-title">
                                <h2>Yaghyesh Chauhan</h2>
                            </div>
                            <div class="deginaton">
                                <span>Frontend Developer</span>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <div class="holder-img">
                          <a href="#"><img class="bcchu" src="img/team/yaghyesh.jpg" alt=""></a>
                      </div>  
                    </div>
                    </div>
					
					<div class="single-service-holder clearfix">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <div class="holder-img">
                          <a href="#"><img class="bcchu" src="img/team/ritik.jpg" alt=""></a>
                      </div>  
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="holder-content sm-des">
                            <div class="hc-title">
                                <h2>Ritik Kumar</h2>
                            </div>
                            <div class="deginaton">
                                <span>Backend Developer</span>
                            </div>
                        </div>
                        
                    </div>
                    </div>
					
                </div>
            </div>
        </div>
</div>
    <!--about chef area are end-->
    
    <!-- testimonial area are start --
    <div class="testimonial-area pt40 pb40">
        <div class="container">
               <div class="row">
                  <div class="total-testimonial carasourl-pagi">
                       <div class="col-md-12">
                           <div class="single-testimonial">
                              <div class="tm-img">
                                  <img src="img/author/test01.png" alt="">
                              </div>
                              <div class="tm-content">
                                  <div class="sm-des">
                                      Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                                  </div>
                                  <div class="tm-author">
                                      Jhon Doe <span>-Accounce Manager</span>
                                  </div>
                              </div> 
                           </div>
                       </div>
                       <div class="col-md-12">
                           <div class="single-testimonial">
                              <div class="tm-img">
                                  <img src="img/author/test01.png" alt="">
                              </div>
                              <div class="tm-content">
                                  <div class="sm-des">
                                      Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                                  </div>
                                  <div class="tm-author">
                                      Jhon Doe <span>-Accounce Manager</span>
                                  </div>
                              </div> 
                           </div>
                       </div>
                   </div>
               </div>
           </div>
    </div>
    <!-- testimonial area are end -->
    
    <!-- gallery area are start--
    <div class="gallary-area pt60 pb60 shape-holder">
        <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                <div class="section-title text-center pb40">
                    <h1>Our</h1>
                    <h2>Gallery</h2>
                    <div class="sec-img">
                        <img src="img/icon/icon-h3.png" alt="">
                    </div>
                </div>
<div class="sm-des">
Praesent et dolor tristique, pellentesque eros non, efficitur felis. Donec quis molestie metus. Nulla at justo ex. Vestibulum commodo bibendum consequat. Fusce eleifend eros sit amet congue tristique. Pellentesque tincidunt feugiat rutrum. Suspendisse nec nibh nec nisi euismod cursus quis eget quam. Nullam eleifend, purus vel lacinia posuere, diam leo luctus ligula, sed tristique. 
</div>
            </div>
        </div>
    </div>
        <div class="clearfix">
            <div class="main-gallary">
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery" href="img/product/06.jpg"><img src="img/product/06.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/07.jpg"><img src="img/product/07.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/08.jpg"><img src="img/product/08.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/09.jpg"><img src="img/product/09.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/10.jpg"><img src="img/product/10.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/11.jpg"><img src="img/product/11.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/12.jpg"><img src="img/product/12.jpg" alt=""></a>
        </div>
        <div class="single-gallery">
            <a class="venobox" data-gall="myGallery"  href="img/product/13.jpg"><img src="img/product/13.jpg" alt=""></a>
        </div>
    </div>
        </div>
        <div class="find-more text-center">
            <a class="com-btn" href="#">Load More</a>
		</div>
    
    </div>
    <!-- gallery area are end-->
    
    <!--footer area are start--
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
                                249 street Ung Van Khiem ,<br>
                                ward 25 Binh Thanh district ,HCM Vietnam <br>
                                <span class="email">giao.trinh@emthemes.com</span>
                            </span>
                            <div class="phone-no">
                                <span>+84 866 725 048</span>
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
                            <span>Daily Booking available from 6pm - 9.30pm</span>
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
                            Subscribe to the <span>La Vie</span> newsletter to get <br> regular update about offers
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
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:02:56 GMT -->
</html>

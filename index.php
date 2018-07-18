<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 05:51:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Snack Frame || home</title>
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
      <!-- Pre-loader -->
    <div id="loading">
      <div id="loading-center">
        <img src="img/loader.gif" alt="">
      </div>
    </div>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--header slider area are start-->
    <div class="header-slider-area">   
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
                        <div class="search-phone">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" height="200px" width="200px" alt="Snack Frame" ></a>
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
                      <a href="index.php"><img src="img/logo.png" height="20px" width="20px" alt=""></a>
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
        <!-- Slider Image -->
        <div id="mainSlider" class="nivoSlider slider-image">
            <img src="img/slider/slider-home.jpg" alt="main slider" title="#htmlcaption1" />
            <img src="img/slider/slider2-home.jpg" alt="main slider" title="#htmlcaption2" />
        </div>
        <!-- Slider Caption 1 -->
        <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
            <div class="slider-progress"></div>
            <div class="slide1-text">
               <div class="top-icon sl-icon">
                   <img src="img/slider/star-icon.png" alt="">
               </div>
                <div class="middle-text">
                    <div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <h1>Snack Frame</h1>
                    </div>
                    <div class="bottom-icon sl-icon">
                        <img src="img/slider/rou.png" alt="">
                    </div>
                </div>
            </div>
        <!-- Slider Caption 2 -->
        <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
            <div class="slider-progress"></div>
            <div class="slide1-text">
               <div class="top-icon sl-icon">
                   <img src="img/slider/star-icon.png" alt="">
               </div>
                <div class="middle-text">
                    <div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <h1>Snack Frame</h1>
                    </div>
                    <div class="bottom-icon sl-icon">
                        <img src="img/slider/rou.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home slider end -->
    
    </div> 
    </div>
    
    <!--about area are start-->
    <div class="about-area">
        <div class="single-about">
           <img src="img/banner/left.jpg" alt="">
            <div class="about-content">
                <div class="about-table">
                    <div class="about-cell">
                        <img src="img/logo.png" alt="">
						<img src="img/name.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="single-about sab-2">
           <img src="img/banner/about-lavie.jpg" alt="">
            <div class="about-content">
                <div class="about-table">
                    <div class="about-cell">
                        <div class="section-title text-center pb40">
                    <h1>About</h1>
                    <h2>Snack Frame</h2>
                    </div>
                        <p></p>
                        <a class="com-btn" href="about-us.php">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-about">
           <img src="img/banner/right.jpg" alt="">
            <div class="about-content">
                <div class="about-table">
                    <div class="about-cell">
                        <img src="img/moto.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about area are end-->


    <!-- service holder area are start-
    <div class="service-holder-area pt60 pb60">
        <div class="container">
            <div class="row">
               <div class="total-service-holder carsoule-btn">
                <div class="single-service-holder">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="holder-img">
                      <a href="#"><img src="img/author/01.png" alt=""></a>
                  </div>  
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="holder-content sm-des">
                        <div class="hc-title">
                            <h2>jane Done</h2>
                        </div>
                        <div class="deginaton">
                            <span>CHEF</span>
                        </div>

                        <P>
                            Praesent et dolor tristique, pellentesque eros non, efficitur felis. Donec quis molestie metus. Nulla at justo ex. Vestibulum commodo bibendum consequat. Fusce eleifend eros sit amet congue tristique. Pellentesque tincidunt feugiat rutrum. Suspendisse nec nibh nec nisi euismod.
                        </P>
                    </div>
                    <div class="holder-icon">
                        <div class="single-icon">
                            <img src="img/author/icon01.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon02.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon03.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon04.png" alt="">
                        </div>
                    </div>
                </div>
                </div>
                <div class="single-service-holder">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="holder-img">
                      <a href="#"><img src="img/author/02.png" alt=""></a>
                  </div>  
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="holder-content sm-des">
                        <div class="hc-title">
                            <h2>Matthew Done</h2>
                        </div>
                        <div class="deginaton">
                            <span>MASTER CHEF</span>
                        </div>

                        <P>
                            Praesent et dolor tristique, pellentesque eros non, efficitur felis. Donec quis molestie metus. Nulla at justo ex. Vestibulum commodo bibendum consequat. Fusce eleifend eros sit amet congue tristique. Pellentesque tincidunt feugiat rutrum. Suspendisse nec nibh nec nisi euismod.
                        </P>
                    </div>
                    <div class="holder-icon">
                        <div class="single-icon">
                            <img src="img/author/icon01.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon02.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon03.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon04.png" alt="">
                        </div>
                    </div>
                </div>
                </div>
                <div class="single-service-holder sm-des">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="holder-img">
                      <a href="#"><img src="img/author/03.png" alt=""></a>
                  </div>  
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="holder-content">
                        <div class="hc-title">
                            <h2>Rabinson Doe</h2>
                        </div>
                        <div class="deginaton">
                            <span>ACCOUNTE MANAGER</span>
                        </div>

                        <P>
                            Praesent et dolor tristique, pellentesque eros non, efficitur felis. Donec quis molestie metus. Nulla at justo ex. Vestibulum commodo bibendum consequat. Fusce eleifend eros sit amet congue tristique. Pellentesque tincidunt feugiat rutrum. Suspendisse nec nibh nec nisi euismod.
                        </P>
                    </div>
                    <div class="holder-icon">
                        <div class="single-icon">
                            <img src="img/author/icon01.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon02.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon03.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="img/author/icon04.png" alt="">
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="service-area">
					<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <img src="img/author/service1.png" alt="">
                        </div>
                        <div class="service-title">
                            <h2>restaurant</h2>
                        </div>
                        <div class="service-text sm-des">
                            <p>
                                Sed ut perspiciatis unde omnis 
                                istenatus error voluptatem accusantium 
                                dolorem laudantium, to tam rem aperiames, 
                                eaque ipsa quae ab illo inventore veritatis et quasi.
                            </p>
                        </div>
                        <div class="read-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
					<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <img src="img/author/service2.png" alt="">
                        </div>
                        <div class="service-title">
                            <h2>Coffe Bar</h2>
                        </div>
                        <div class="service-text sm-des">
                            <p>
                                Sed ut perspiciatis unde omnis 
                                istenatus error voluptatem accusantium 
                                dolorem laudantium, to tam rem aperiames, 
                                eaque ipsa quae ab illo inventore veritatis et quasi.
                            </p>
                        </div>
                        <div class="read-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
					<div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <img src="img/author/service3.png" alt="">
                        </div>
                        <div class="service-title">
                            <h2>Cupcake</h2>
                        </div>
                        <div class="service-text sm-des">
                            <p>
                                Sed ut perspiciatis unde omnis 
                                istenatus error voluptatem accusantium 
                                dolorem laudantium, to tam rem aperiames, 
                                eaque ipsa quae ab illo inventore veritatis et quasi.
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
    <!-- service holder area are end-->
    
    <!-- our menu area are start-->
    <!--<div class="our-menu-area  pt60 pb60">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                   <div class="section-title text-center pb40">
                       <h1>Fast Food</h1>
                       <h2>Menu</h2>
                        <div class="sec-img">
                            <img src="img/icon/product.png" alt="">
                        </div>
                   </div>
              </div>
              </div>
               
            <div class="row">
                <div class="total-our-menu carsoule-btn cb-2">
                    <div class="col-xs-12">
                        <div class="single-our-menu">
                            <div class="sm-image">
                                <a href="#"><img src="img/menu/01.jpg" alt=""></a>
                                 <a class="com-btn" href="#">Add To Cart</a>
                                <div class="sm-heading"><a href="#">Watermelon Smoothie</a></div>
                            </div>
                            <div class="sm-content">
                                <div class="sm-des">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed semper sem. Sed nec dui scelerisque, ornare nisl id, luctus neque….
                                </div>
                                <div class="sm-ratting">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="sm-price">
                                    $500.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="single-our-menu">
                            <div class="sm-image">
                                <a href="#"><img src="img/menu/02.jpg" alt=""></a>
                                 <a class="com-btn" href="#">Add To Cart</a>
                                <div class="sm-heading"><a href="#">Huse Sagittis Dignissim</a></div>
                            </div>
                            <div class="sm-content">
                                <div class="sm-des">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed semper sem. Sed nec dui scelerisque, ornare nisl id, luctus neque….
                                </div>
                                <div class="sm-price">
                                    $350.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="single-our-menu">
                            <div class="sm-image">
                                <a href="#"><img src="img/menu/03.jpg" alt=""></a>
                                 <a class="com-btn" href="#">Add To Cart</a>
                                <div class="sm-heading"><a href="#">Watermelon Smoothie</a></div>
                            </div>
                            <div class="sm-content">
                                <div class="sm-des">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed semper sem. Sed nec dui scelerisque, ornare nisl id, luctus neque….
                                </div>
                                <div class="sm-ratting">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="sm-price">
                                    $500.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="single-our-menu">
                            <div class="sm-image">
                                <a href="#"><img src="img/menu/04.jpg" alt=""></a>
                                 <a class="com-btn" href="#">Add To Cart</a>
                                <div class="sm-heading"><a href="#">Fuse Sagittis Dignissim</a></div>
                            </div>
                            <div class="sm-content">
                                <div class="sm-des">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed semper sem. Sed nec dui scelerisque, ornare nisl id, luctus neque….
                                </div>
                                <div class="sm-ratting">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="sm-price">
                                    $600.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="find-more text-center">
                   <a class="com-btn" href="#">Find Out More</a>
            </div>
        </div>
    </div>-->
    <!-- our menu area are end-->
    
    <!-- testimonial area are start 
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
     
    <!-- our-special-menu-area are start-->
    <!--<div class="our-special-menu-area pt60 pb60 ">
            <div class="container">
                <div class="row">
                      <div class="col-md-12">
                           <div class="section-title text-center pb40">
                               <h1>Our</h1>
                               <h2>Menu</h2>
                                <div class="sec-img">
                                    <img src="img/icon/product2.png" alt="">
                                </div>
                           </div>
                      </div>
                </div>
                <div class="row">
                   <div class="col-md-2 hidden-sm hidden-xs"></div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="special-menu text-center">
                        <div class="sma-img">
                           <img src="img/menu/05.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Specical Menu</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Lora Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$700.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Esas Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$300.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div>                               
                            </div>
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Lora Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$700.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Esas Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$300.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div>                               
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="sma-middle mt60">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="special-menu sma-small">
                        <div class="sma-img">
                           <img src="img/menu/06.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Drinks</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>                              
                            </div>
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>                              
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu">
                        <div class="sma-img">
                           <img src="img/menu/07.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Breakfast Menu </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Lora Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$700.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Esas Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$300.00</span> 
                                    </div>
                               </div>                               
                            </div>
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Lora Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$700.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Esas Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$300.00</span> 
                                    </div>
                               </div>                             
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                  <div class="sma-middle sma-last mt60 bac-right">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu">
                        <div class="sma-img">
                           <img src="img/menu/09.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Lunch Menu </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Lora Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$700.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Esas Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$300.00</span> 
                                    </div>
                               </div>                               
                            </div>
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Lora Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$700.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Duis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$500.00</span> 
                                    </div>
                               </div> 
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Esas Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$300.00</span> 
                                    </div>
                               </div>                             
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="special-menu sma-small">
                        <div class="sma-img">
                           <img src="img/menu/08.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Drinks</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>                              
                            </div>
                            <div class="total-menu-single">
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>  
                               <div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">Luis Odio Nulla</a>
                                   </div>
                                    <div class="smi-des">
                                        <span>Lorem ipsum dolor sit...</span>
                                    </div>
                                    <div class="smi-price">
                                       <span>$600.00</span> 
                                    </div>
                               </div>                              
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="find-more text-center">
                   <a href="#" class="com-btn">Discover Menu</a>
				</div>
				</div>
            </div>
        </div>-->
    <!-- our-special-menu-area are end-->
       
    <!--Reservation area start
    <div class="reservation-area pt60 pb60">
        <div class="container">
                <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="section-title text-center pb40">
                               <h1>Make Your</h1>
                               <h2>Reservation</h2>
                                <div class="sec-img">
                                    <img src="img/icon/iconh3_03.png" alt="">
                                </div>
                           </div>
                      </div>
                </div>
            <div class="row">
                <div class="smi-des text-center">
                        <span>Make your reservation online any time, day or night by using the form below! La Vie Restaurant looks forward to serving you the best food experience. <br> Or you can also call us from 9:00 am until 11:00 pm everyday </span>
                </div>
                <div class="slider-reserve">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="reserve-slide carasourl-pagi">
                            <div class="rsa-img">
                                <img src="img/slider/slider-small.jpg" alt="">
                                    <div class="rsa-content text-center">
                                        <img src="img/slider/baner-slider.png" alt="">
                                        <h3>Booking</h3>
                                        <img src="img/slider/icon-rou-small.png" alt="">
                                    </div>
                            </div>
                            <div class="rsa-img">
                                <img src="img/slider/slider2-small.jpg" alt="">
                                    <div class="rsa-content text-center">
                                        <img src="img/slider/baner-slider.png" alt="">
                                        <h3>Booking</h3>
                                        <img src="img/slider/icon-rou-small.png" alt="">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="reserve-table">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input-box">
                                            <label>Date</label>
                                            <input class="date" type="text" placeholder="Which Date? " name="date">
                                        </div>
                                        <div class="input-box">
                                            <label>Time</label>
                                            <input class="time" type="text" placeholder="Chose Your Time" name="time">
                                        </div>
                                        <div class="input-box">
                                            <label>Guest</label>
                                            <select name="guest">
                                                <option value="1">1</option>
                                                <option value="2">50</option>
                                                <option value="3">100</option>
                                                <option value="4">150</option>
                                                <option value="5">200</option>
                                                <option value="6">250</option>
                                                <option value="7">300</option>
                                                <option value="8">350</option>
                                                <option value="9">400</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input-box">
                                            <label>Name</label>
                                            <input type="text" placeholder="Your Name" name="name">
                                        </div>
                                        <div class="input-box">
                                            <label>Email<em>*</em></label>
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="input-box">
                                            <label>phone</label>
                                            <input type="text" placeholder="Phone Number" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-box checkout">
                                    <a class="com-btn" href="#">Send</a>
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
    </div>
    <!--Reservation area end-->
	

    <!--contact area area start-->
    <br><br>
    <div class="contact-area pt60 pb150" id="contact">
        <div class="container">
		  <div class="contact-text">
		    <h1 align="center">Contact Us</h1></div><hr>
                <div class="row">
                      <div class="col-md-6 col-sm-6 col-sm-12">
                         <div class="contact-text left-side">
                             <h2>We'd love to hear from you </h2>
                             <div class="sm-des"></div>
                            <div class="wpb_wrapper">
                                <div class="information-contact">
                                    <p><b>Address: </b>Hall 2</p>
                                    <p> <b>Phone: </b></p>
                                    <p><b>Email: </b>snackframe@gmail.com</p>
                                </div>
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
		<!-- Scroll up js -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- google map  js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(26.5123, 80.2329
					)
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
        <!--Preloader-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        //Preloader
        $(window).on("load", function() {
        preloaderFadeOutTime = 2000;
        function hidePreloader() {
        var preloader = $('#loading');
        preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
        });
        });
        </script>

    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 05:58:05 GMT -->
</html>

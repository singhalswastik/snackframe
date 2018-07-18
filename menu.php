<?php
session_start();

$db_host = 'snackframe.mysql.database.azure.com'; // Server Name
$db_user = 'swastik@snackframe'; // Username
$db_pass = 'Tryss@iitk'; // Password
$db_name = 'sf'; // Database Name

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$veg_menu = 'SELECT * 
    FROM veg_menu';
    
$query_veg = mysqli_query($conn, $veg_menu);


if (!$query_veg) {
  die ('SQL Error: ' . mysqli_error($conn));
}

$paratha_menu = 'SELECT * 
    FROM paratha_menu';
    
$query_paratha = mysqli_query($conn, $paratha_menu);


if (!$query_paratha) {
  die ('SQL Error: ' . mysqli_error($conn));
}

$drinks_menu = 'SELECT * 
    FROM drinks_menu';
    
$query_drinks = mysqli_query($conn, $drinks_menu);


if (!$query_drinks) {
  die ('SQL Error: ' . mysqli_error($conn));
}

$snacks_menu = 'SELECT * 
    FROM snacks_menu';
    
$query_snacks = mysqli_query($conn, $snacks_menu);


if (!$query_snacks) {
  die ('SQL Error: ' . mysqli_error($conn));
}

$rice_menu = 'SELECT * 
    FROM rice_menu';
    
$query_rice = mysqli_query($conn, $rice_menu);


if (!$query_rice) {
  die ('SQL Error: ' . mysqli_error($conn));
}

$non_veg_menu = 'SELECT * 
    FROM non_veg_menu';
    
$query_non_veg = mysqli_query($conn, $non_veg_menu);


if (!$query_non_veg) {
  die ('SQL Error: ' . mysqli_error($conn));
}

?>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/menu.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:04:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Snack Frame || Menu</title>
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
<div class="menu-wraper">
    <!--header slider area are start-->
    <div class="header-slider-area common-page"> 
    <!--header slider area are end-->  

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
                            <a href="index.php"><img src="img/logo.png" height="200px" width="200px" alt=""></a>
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
                            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true">
                            </i> </a>
                           
                           </li>
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
                <h1>Menu</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                <li class="active">Menu</li>
            </ol>
        </div>
    </div> 
    </div>
     
    <!-- our-special-menu-area are start-->
    <div class="our-special-menu-area pt60 pb60 ">
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
                   
                    <div class="col-md-6 col-sm-6 col-xs-12" id="1">
                        <div class="special-menu">
                        <div class="sma-img">
                           
                           <div class="sma-heading">
                               <h3>Vegetarian </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                              <?php
                               $count=-1;
                            while ($row = mysqli_fetch_array($query_veg))
                            {
                              $count++;
                              if(($count%7)==0&&$count>0)
                                echo '<div class="total-menu-single">';?>
                            <form method="post" action="add_to_cart.php">
                            	<input type="hidden" name="name" value="<?php echo $row["Item"]; ?>" />  
                    			<input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" />
                    			<input type="hidden" name="id" value="1" />
                              <?php 

                              echo '<div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">'.$row['Item'].'</a>
                                   </div>
                                    <div class="smi-price">
                                       <span>'.$row['Price'].''.'.00'."    ".'</span> 
                                    </div>
                                   
								   <div class="qty-add">
								   	
                                     <input type="number" name="quantity" class="qty-btn" min="1" value="1">
                                     <input type=submit id="exc" class="abcd" value="Add to cart"></form>
                                </div>
                               </div> ';
                              if(($count%7)==6)
                                echo '</div>';
      
                            }
                            if(($count%7)!=6)
                              echo '</div>';
                            ?>
                        </div>
                        </div>
                    </div>
					
					<div class="col-md-6 col-sm-6 col-xs-12" id="2">
                        <div class="special-menu">
                        <div class="sma-img">
                           
                           <div class="sma-heading">
                               <h3>Non-Vegetarian </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                              <?php
                               $count=-1;
                            while ($row = mysqli_fetch_array($query_non_veg))
                            {
                              $count++;
                              if(($count%7)==0&&$count>0)
                                echo '<div class="total-menu-single">';
                            ?>
                            <form method="post" action="add_to_cart.php">
                            	<input type="hidden" name="name" value="<?php echo $row["Item"]; ?>" />  
                    			<input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" />
                    			<input type="hidden" name="id" value="2" />
                              <?php
                              echo '<div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">'.$row['Item'].'</a>
                                   </div>
                                    <div class="smi-price">
                                       <span>'.$row['Price'].''.'.00'."    ".'</span> 
                                    </div>
                                   
								   <div class="qty-add"><form>
                                     <input type="number" name="quantity" class="qty-btn" min="1" value="1">
                                     <input type=submit id="exc" class="abcd" value="Add to cart"></form>
                                </div>
                               </div> ';
                              if(($count%7)==6)
                                echo '</div>';
      
                            }
                            if(($count%7)!=6)
                              echo '</div>';
                            ?>
                        </div>
                        </div>
                    </div>
					
                </div><br>
				
				<div class="row">
                   
                    <div class="col-md-6 col-sm-6 col-xs-12" id="3">
                        <div class="special-menu">
                        <div class="sma-img">
                           
                           <div class="sma-heading">
                               <h3>Rice </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                              <?php
                               $count=-1;
                            while ($row = mysqli_fetch_array($query_rice))
                            {
                              $count++;
                              if(($count%7)==0&&$count>0)
                                echo '<div class="total-menu-single">';?>
                            <form method="post" action="add_to_cart.php">
                            	<input type="hidden" name="name" value="<?php echo $row["Item"]; ?>" />  
                    			<input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" />
                    			<input type="hidden" name="id" value="3" />
                              <?php
                              echo '<div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">'.$row['Item'].'</a>
                                   </div>
                                    <div class="smi-price">
                                       <span>'.$row['Price'].''.'.00'."    ".'</span> 
                                    </div>
                                   
								   <div class="qty-add"><form>
                                     <input type="number" name="quantity" class="qty-btn" min="1" value="1">
                                     <input type=submit id="exc" class="abcd" value="Add to cart"></form>
                                </div>
                               </div> ';
                              if(($count%7)==6)
                                echo '</div>';
      
                            }
                            if(($count%7)!=6)
                              echo '</div>';
                            ?>
                        </div>
                        </div>
                    </div>
					
					<div class="col-md-6 col-sm-6 col-xs-12" id="4">
                        <div class="special-menu">
                        <div class="sma-img">
                           
                           <div class="sma-heading">
                               <h3>Paratha </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                              <?php
                               $count=-1;
                            while ($row = mysqli_fetch_array($query_paratha))
                            {
                              $count++;
                              if(($count%7)==0&&$count>0)
                                echo '<div class="total-menu-single">';?>
                            <form method="post" action="add_to_cart.php">
                            	<input type="hidden" name="name" value="<?php echo $row["Item"]; ?>" />  
                    			<input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" />
                    			<input type="hidden" name="id" value="4" />
                              <?php
                              echo '<div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">'.$row['Item'].'</a>
                                   </div>
                                    <div class="smi-price">
                                       <span>'.$row['Price'].''.'.00'."    ".'</span> 
                                    </div>
                                   
								   <div class="qty-add"><form>
                                     <input type="number" name="quantity" class="qty-btn" min="1" value="1">
                                     <input type=submit id="exc" class="abcd" value="Add to cart"></form>
                                </div>
                               </div> ';
                              if(($count%7)==6)
                                echo '</div>';
      
                            }
                            if(($count%7)!=6)
                              echo '</div>';
                            ?>
                        </div>
                        </div>
                    </div>
					
                </div><br>
				
				<div class="row">
                   
                    <div class="col-md-6 col-sm-6 col-xs-12" id="5">
                        <div class="special-menu">
                        <div class="sma-img">
                           
                           <div class="sma-heading">
                               <h3>Snacks </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                              <?php
                               $count=-1;
                            while ($row = mysqli_fetch_array($query_snacks))
                            {
                              $count++;
                              if(($count%7)==0&&$count>0)
                                echo '<div class="total-menu-single">';?>
                            <form method="post" action="add_to_cart.php">
                            	<input type="hidden" name="name" value="<?php echo $row["Item"]; ?>" />  
                    			<input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" />
                    			<input type="hidden" name="id" value="5" />
                              <?php
                              echo '<div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">'.$row['Item'].'</a>
                                   </div>
                                    <div class="smi-price">
                                       <span>'.$row['Price'].''.'.00'."    ".'</span> 
                                    </div>
                                   
								   <div class="qty-add"><form>
                                     <input type="number" name="quantity" class="qty-btn" min="1" value="1">
                                     <input type=submit id="exc" class="abcd" value="Add to cart"></form>
                                </div>
                               </div> ';
                              if(($count%7)==6)
                                echo '</div>';
      
                            }
                            if(($count%7)!=6)
                              echo '</div>';
                            ?>
                        </div>
                        </div>
                    </div>
					
					<div class="col-md-6 col-sm-6 col-xs-12" id="6">
                        <div class="special-menu">
                        <div class="sma-img">
                           
                           <div class="sma-heading">
                               <h3>Drinks </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <div class="total-menu-single">
                              <?php
                               $count=-1;
                            while ($row = mysqli_fetch_array($query_drinks))
                            {
                              $count++;
                              if(($count%7)==0&&$count>0)
                                echo '<div class="total-menu-single">';?>
                            <form method="post" action="add_to_cart.php">
                            	<input type="hidden" name="name" value="<?php echo $row["Item"]; ?>" />  
                    			<input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" />
                    			<input type="hidden" name="id" value="6" />
                              <?php
                              echo '<div class="single-menu-item">
                                   <div class="smi-heading">
                                       <a href="#">'.$row['Item'].'</a>
                                   </div>
                                    <div class="smi-price">
                                       <span>'.$row['Price'].''.'.00'."    ".'</span> 
                                    </div>
                                   
								   <div class="qty-add"><form>
                                     <input type="number" name="quantity" class="qty-btn" min="1" value="1">
                                     <input type=submit id="exc" class="abcd" value="Add to cart"></form>
                                </div>
                               </div> ';
                              if(($count%7)==6)
                                echo '</div>';
      
                            }
                            if(($count%7)!=6)
                              echo '</div>';
                            ?>
                        </div>
                        </div>
                    </div>
					
                </div><br>
				
				</div>
            </div>
        
    <!-- our-special-menu-area are end-->
       
    <!--Reservation area start--
    <div class="reservation-area pt60 pb60">
        <div class="container">
                <div class="row">
                      <div class="col-md-12">
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
                                    <div class="col-md-6">
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

                                    <div class="col-md-6">
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
                    center: new google.maps.LatLng(26.5123, 80.2329)
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

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/menu.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:04:50 GMT -->
</html>

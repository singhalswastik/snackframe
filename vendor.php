<?php
$db_host = 'snackframe.mysql.database.azure.com'; // Server Name
$db_user = 'swastik@snackframe'; // Username
$db_pass = 'Tryss@iitk'; // Password
$db_name = 'sf'; // Database Name
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql1 = "SELECT * FROM transactions where complete='n'";
$sql2 = "SELECT * FROM transactions where complete='y'";
    
$query1 = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);
if (!$query1) {
  die ('SQL Error: ' . mysqli_error($conn));
}
if (!$query2) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:04:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Snack Frame || Vendor</title>
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
<div class="login-wraper">
       
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
                        <div class="search-phone">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" height="200px" width="200px" alt="Snack Frame"></a>
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
                <h1>Hall 2 Canteen</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                <li class="active">Canteen</li>
            </ol>
        </div>
    </div> 
    </div>
    
    <!-- cart are start-->
    <div class="cart-area pt60 pb60 " id="1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
			  <center><h2>Current Orders</h2></center><br>
                
                   <div class="table-responsive">
                    <table class="shop_table cart table">
                        <thead>
							             <tr>
                                <th></th>
                                <th class="product-name">Roll No.</th>
                                <th class="product-price">Item</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-name">Transaction Id</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
    
                while ($row = mysqli_fetch_array($query1))
								{
                                ?>
								<form method="post" action="complete.php">
									<tr>
									<td><input type="submit" value="complete"></td>
								<?php
								  echo '<td>'.$row['username'].'</td>
										<td>'.$row['Item_Name'].'</td>
										<td>'.$row['Quantity'].'</td>
                    <td>'.$row['transaction_id'].'</td>';
										?>
										
										<input type="hidden" name="Item_Name" value="<?php echo $row["Item_Name"]; ?>" />  
										<input type="hidden" name="username" value="<?php echo $row["username"]; ?>" />
										</tr>
										</form>
										<?php
								 }
								 ?>
                        </tbody>
                    </table>
                    </div>
            </div>
			
			<div class="col-md-6">
			  <center><h2>Orders Completed</h2></center><br>
                
                   <div class="table-responsive">
                    <table class="shop_table cart table">
                        <thead>
							             <tr>
                                <th></th>
                                <th class="product-name">Roll No.</th>
                                <th class="product-price">Item</th>
                                <th class="product-quantity">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    
							while ($row = mysqli_fetch_array($query2))
							{
							  ?>
							<form method="post" action="not_complete.php">
								<tr>
								<td><input type="submit" value="not complete"></td>
							<?php
							  echo '<td>'.$row['username'].'</td>
									<td>'.$row['Item_Name'].'</td>
									<td>'.$row['Quantity'].'</td>';
									?>
									
									<input type="hidden" name="Item_Name" value="<?php echo $row["Item_Name"]; ?>" />  
									<input type="hidden" name="username" value="<?php echo $row["username"]; ?>" />
									</tr>
									</form>
									<?php
							 }
							 ?>
                        </tbody>
                    </table>
                    </div>
                
            </div>
        </div>
    </div>
</div>
    <!-- cart are end-->
     
    
	<!--map area are start-->
    <div class="map-area">
      <div id="googleMap"></div>
    </div>
    <!--map area are end-->
        
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
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jun 2018 06:04:03 GMT -->
</html>

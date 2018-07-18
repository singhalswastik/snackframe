<?php
header('Content-Type: text/html; charset=utf-8');
   /*-------------------------------------------------------------
      	Username and password gotten from the login form
    -------------------------------------------------------------*/
    

    $email = $_GET['email']; // Set email variable
    $salt = htmlspecialchars($_GET["salt"]); // Set salt variable
    /*-------------------------------------------------------------
       Database connection and selection of the database to be used
    -------------------------------------------------------------*/

    //MySQL Server Info   
$db_host = 'snackframe.mysql.database.azure.com'; // Server Name
$db_user = 'swastik@snackframe'; // Username
$db_pass = 'Tryss@iitk'; // Password
$db_name = 'sf'; // Database Name
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    /*-------------------------------------------------------------
	The query to the database and getting the value from it
    -------------------------------------------------------------*/

    $find_user = "SELECT email,username FROM login WHERE email='".$email."' AND salt='".$salt."' AND active='0'";
    //echo $find_user;
    $result = $conn->query($find_user) or die('Error while trying to find user or usre had already been activated'.mysql_error());
    $row = mysqli_fetch_assoc($result);
    if( $result->num_rows > 0)
    {
    
    $activate="UPDATE login SET active='1' WHERE email='".$email."' AND salt='".$salt."' AND active='0'";
    //echo $activate;
    $query = $conn->query($activate);
    echo '<script type="text/javascript">'; 
echo 'alert("Your account has been activated, you will be redirected to login page");'; 
echo 'window.location.href = "login.php";';
echo '</script>';
    }	
    /*echo $query->num_rows;
    if($query->num_rows=='1')
        	echo '<div class="statusmsg">Your account has been activated, you can now login</div>';*/
       else
       	echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
$conn->close();
?>

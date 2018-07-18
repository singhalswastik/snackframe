<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location: login.php");
}
function id($max = 8) {
	$characterList = "0123456789";
	$i = 0;
	$id = "";
	while ($i < $max) {
	    $id .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
	    $i++;
	}
	return $id;
}



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
$username=$_SESSION['username'];
$sql = "SELECT * 
		FROM ".$username."_cart";
		
$result = $conn->query($sql);

// fetching current date and time
$time = "SELECT DATE(NOW()), TIME(NOW())";		
$datetime = $conn->query($time);
$datetimerow = $datetime->fetch_assoc();

$transaction_id=id();
if( $result->num_rows > 0)
{		while ($row = $result->fetch_assoc())
		{
			$insert="insert into transactions values('".$_SESSION['roll']."',2,".$transaction_id.",'".$row['Item_Name']."',".$row['Quantity'].",".$row['Price'].",".$row['Total'].",'".$datetimerow['DATE(NOW())']."','".$datetimerow['TIME(NOW())']."','n')";
			$conn->query($insert);
			
		}
		$delete="delete from ".$username."_cart";
		$conn->query($delete);
echo '<script type="text/javascript">'; 
echo 'alert("Your order has been placed.\nYou will be redirected to the main menu.\nYou can check your order in Previous Orders");'; 
echo 'window.location.href = "menu.php";';
echo '</script>';

}
else
{
echo '<script type="text/javascript">'; 
echo 'alert("Your Cart is Empty");'; 
echo 'window.location.href = "menu.php";';
echo '</script>';

}
$conn->close();
?>



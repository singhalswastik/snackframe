<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location: login.php");
	exit;
}

$db_host = 'snackframe.mysql.database.azure.com'; // Server Name
$db_user = 'swastik@snackframe'; // Username
$db_pass = 'Tryss@iitk'; // Password
$db_name = 'sf'; // Database Name
$name=$_POST["name"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$id=$_POST["id"];
$total=$quantity * $price;
$username=$_SESSION['username'];
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "SELECT * FROM ".$username."_cart";
$result = mysqli_query($conn, $query);

if(empty($result)) {
                $query = "CREATE TABLE ".$username."_cart(Item_Name varchar(25), Quantity integer,Price integer,Total integer)";
                $result = mysqli_query($conn, $query);
}



$sql = "SELECT * FROM ".$username."_cart where Item_Name='".$name."'";
$result = $conn->query($sql);
if( $result->num_rows > 0)
{
	$row = $result->fetch_assoc();
	$prev_quantity=$row['Quantity'];
	$quantity+=$prev_quantity;
	$total=$quantity * $price;
	$update= "UPDATE ".$username."_cart set Quantity=".$quantity."  where Item_Name='".$name."'";
	$conn->query($update);
	$update= "UPDATE ".$username."_cart set Total=".$total."  where Item_Name='".$name."'";
	$conn->query($update);
	header("Location:menu.php#".$id);
}
else{
		$cart = "insert into ".$username."_cart(Item_Name,Quantity,Price,Total) values('".$name."',".$quantity.",".$price.",".$total.")";
		echo $cart;

		$result = mysqli_query($conn, $cart);
		echo $result;
		if(!empty($result)) {
			header("Location:menu.php#".$id);
		} else {
		    echo "Error: Contact Owner";
		}
	}

$conn->close();
?>




<?php
session_start();

$db_host = 'snackframe.mysql.database.azure.com'; // Server Name
$db_user = 'swastik@snackframe'; // Username
$db_pass = 'Tryss@iitk'; // Password
$db_name = 'sf'; // Database Name
$name=$_POST["item"];
$username=$_SESSION['username'];
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$remove = "DELETE from ".$username."_cart where Item_Name='".$name."'" ;


if ($conn->query($remove) == TRUE) {
    header('Location:cart.php');
} else {
    echo "Error: Contact Owner";
}


$conn->close();
?>




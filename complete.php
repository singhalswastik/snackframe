<?php

$db_host = 'snackframe.mysql.database.azure.com'; // Server Name
$db_user = 'swastik@snackframe'; // Username
$db_pass = 'Tryss@iitk'; // Password
$db_name = 'sf'; // Database Name
// Create connection

$username=$_POST["username"];
$Item_Name=$_POST["Item_Name"];

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$update = "update transactions set complete='y' where Item_Name='".$Item_Name."' and username='".$username."'" ;

if ($conn->query($update) == TRUE) {
	header('Location:vendor.php#1');
} else {
    echo "Error: Contact Owner";
}


$conn->close();
?>




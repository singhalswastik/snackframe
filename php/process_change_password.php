<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
    $form_username=$_SESSION['username'];
   /*-------------------------------------------------------------
      	Username and password gotten from the login form
    -------------------------------------------------------------*/

    $old_password = $_POST['old'];
    $new_password = $_POST['new'];

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

    $find_user = "SELECT salt,hashed_pwd,active FROM login WHERE username='".$form_username."'";
    $result = $conn->query($find_user) or die('Error while trying to find salt'.mysql_error());
    $row = mysqli_fetch_assoc($result);
    
    /*-------------------------------------------------------------
    	Getting the value from the database
    	&  
    	salting,hashing of the password from the form
    -------------------------------------------------------------*/
    if($row['active']==1)
    {
        $stored_salt = $row['salt'];
    $stored_hash = $row['hashed_pwd'];
    $check_oldpass = $stored_salt . $old_password;
    $check_hash = hash('sha512',$check_oldpass);
    echo $check_hash."\n";
    echo $stored_hash;
    /*-------------------------------------------------------------
    	Comparing the two hashed values
    -------------------------------------------------------------*/

    if($check_hash == $stored_hash){
        $new_pass=$stored_salt . $new_password;
        $new_hash=hash('sha512',$new_pass);
        $change= "update login set hashed_pwd='".$new_hash."' WHERE username='".$form_username."'";
        $conn->query($change);
        header('Location:../login.php');
    }
    else{
        echo "Old Password Entered Is Wrong";
    }
    }
    else
        echo "Account not activated. Please activate it using the email sent to you";    
    mysql_close(); //Close the connection to the DB
?>

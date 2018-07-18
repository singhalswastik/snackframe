<?php
session_start();
   /*-------------------------------------------------------------
      	Username and password gotten from the login form
    -------------------------------------------------------------*/

    $form_username = $_POST['username'];
    $form_password = $_POST['password'];

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

    $find_user = "SELECT * FROM login WHERE username='".$form_username."'";
    $result = $conn->query($find_user) or die('Error while trying to find salt'.mysql_error());
    if($result->num_rows > 0)
    {
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
    $check_pass = $stored_salt . $form_password;
    $check_hash = hash('sha512',$check_pass);
    
    /*-------------------------------------------------------------
    	Comparing the two hashed values
    -------------------------------------------------------------*/

    if($check_hash == $stored_hash){
        $_SESSION['username']=$row['username'];
        $_SESSION['firstname']=$row['firstname'];
        $_SESSION['lastname']=$row['lastname'];
        $_SESSION['roll']=$row['roll'];
        $_SESSION['email']=$row['email'];
        header("Location: ../index.php");
    }
    else{
        echo '<script type="text/javascript">'; 
echo 'alert("Not Authenticated");'; 
echo 'window.location.href = "../login.php";';
echo '</script>';
    }
    }
    else{
    echo '<script type="text/javascript">'; 
echo 'alert("Account not activated. Please activate it using the email sent to you");'; 
echo 'window.location.href = "../login.php";';
echo '</script>';
    }
}
    else{
    echo '<script type="text/javascript">'; 
echo 'alert("Invalid Credentials");'; 
echo 'window.location.href = "../login.php";';
echo '</script>';
    } 
    mysql_close(); //Close the connection to the DB
?>

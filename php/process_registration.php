<?php

/*-------------------------------------------------------------
  The generateSalt function was gotten from http://code.activestate.com/recipes/576894-generate-a-salt/
  @author AfroSoft 
-------------------------------------------------------------*/

function generateSalt($max = 64) {
	$characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$i = 0;
	$salt = "";
	while ($i < $max) {
	    $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
	    $i++;
	}
	return $salt;
}

/*-------------------------------------------------------------
 Form data
-------------------------------------------------------------*/
    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $roll = ($_POST['roll']);
    $username = ($_POST['username']); // Turn our post into a local variable
    $password = ($_POST['password']); // Turn our post into a local variable
    $email = ($_POST['email']); // Turn our post into a local variable

/*-------------------------------------------------------------
 Database stuff starts from here, 	
 MySQL Server Info is gotten from the $_SERVER variable 
 (assuming we have the path to the file containing the 
 DB credentials in our .htaccess file)	 
-------------------------------------------------------------*/

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

$check = "SELECT email FROM login WHERE email='".$email."'";

$result = $conn->query($check) or die('Error while trying to find user or user had already been activated'.mysql_error());
if($result->num_rows > 0)
{
echo '<script type="text/javascript">'; 
echo 'alert("Email already registered");'; 
echo 'window.location.href = "../register.php";';
echo '</script>';
}
$check = "SELECT username FROM login WHERE username='".$username."'";

$result = $conn->query($check) or die('Error while trying to find user or user had already been activated'.mysql_error());
if($result->num_rows > 0)
{
echo '<script type="text/javascript">'; 
echo 'alert("Username already registered");'; 
echo 'window.location.href = "../register.php";';
echo '</script>';
}
$check = "SELECT roll FROM login WHERE roll='".$roll."'";

$result = $conn->query($check) or die('Error while trying to find user or user had already been activated'.mysql_error());
if($result->num_rows > 0)
{
echo '<script type="text/javascript">'; 
echo 'alert("Roll no. already registered");'; 
echo 'window.location.href = "../register.php";';
echo '</script>';
}

/*-------------------------------------------------------------
 Salting and Hashing 
-------------------------------------------------------------*/

$user_salt = generateSalt(); // Generates a salt from the function above
$combo = $user_salt . $password; // Appending user password to the salt 
$hashed_pwd = hash('sha512',$combo); // Using SHA512 to hash the salt+password combo string


/*
require_once '\SiteExtensions\ComposerExtension\Commands\vendor\autoload.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('snackframeiitk')
  ->setPassword('tryssiitk');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('OTP verification for Snack Frame')
  ->setFrom(array('snackframeiitk@gmail.com' => 'Verification'))
  ->setTo(array($email))
  ->setBody('Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
https://snackframe.azurewebsites.net/verify.php?email='.$email.'&salt='.$user_salt);
//http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
$result = $mailer->send($message);
*/
$url = 'https://api.sendgrid.com/';
 $user = 'azure_0f42b245b9af3c469a8131e3af74d6e9@azure.com';
 $pass = 'Swastik@02';

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => $email,
      'subject' => 'Email Verification For Snack Frame',
      'html' => 'Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
https://snackframe.azurewebsites.net/verify.php?email='.$email.'&salt='.$user_salt,
      'text' => '',
      'from' => 'snackframeiitk@gmail.com',
   );

 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
// print_r($response);
/*-------------------------------------------------------------
 Inserting Data 
-------------------------------------------------------------*/
$sql = "insert into login(firstname,lastname,roll,username,email,salt,hashed_pwd) values('".$firstname."','".$lastname."',".$roll.",'".$username."','".$email."','".$user_salt."','".$hashed_pwd."')";
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">'; 
echo 'alert("Your Profile has been registered. An email has been sent to your registered email address for verification.");'; 
echo 'window.location.href = "../login.php";';
echo '</script>';
} else {
echo '<script type="text/javascript">'; 
echo 'alert("Invalid credentials");'; 
echo 'window.location.href = "../register.php";';
echo '</script>';

}

$conn->close();
?>
<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['roll']);
header("Location: index.php");
?>

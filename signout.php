<?php 
session_start();

unset($_SESSION['username']);
session_destroy();

echo "You have Been LoggedOut Successfully";
header("refresh:3; signin.php");

?>
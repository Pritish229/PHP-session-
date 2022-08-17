<?php
    session_start();
if (isset($_SESSION['username'])) {
    $LogedInUser = $_SESSION['username'];
} else $LogedInUser = null; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
   <?php
    if ($LogedInUser == null) {
    
    ?>
    <a href="signin.php">Sign in</a>
    <?php 
    } else {    
        ?>
         Hello User  <?php echo $LogedInUser; ?>
         <a href="signout.php">Signout</a>
         <a href="profile.php">Update profile</a>
    <?php
    }

    ?>


    
</body>
</html>
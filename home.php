<?php
    session_start();
if (isset($_SESSION['username'])) {
    $logedinuser = $_SESSION['username'];
    
}else $logedinuser = null; {
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <?php
        if($logedinuser == null){

     ?>
        <a href="signin.php"> Signin</a>
    <?php 
        } else{
    ?>
        Hi <?php echo  $logedinuser ?> 
        <a href="signout.php"> Signout</a>
    <?php
        } 
        }
    ?>
        
     
</body>
</html>
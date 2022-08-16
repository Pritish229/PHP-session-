<?php
session_start();
if (isset($_POST['username'])&& ($_POST['username']) != null) {
    $_SESSION['username'] = $_POST['username'];
    echo "<h1> The session Has Started </h1>"."<h3>". $_SESSION['username'] . "</h3>";
    header("refresh:5; home.php");
}
else{
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
    <form action="" method="post">
        <label for="User Name"> Enter Your User Name</label>
        <input type="text" name="username" id="">
        <button type="submit" name ="submit">Submit</button>

       <?php
    }
       ?>

    </form>
</body>
</html>
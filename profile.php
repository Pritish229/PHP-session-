<?php
    session_start();
    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];

        if(isset($_POST['username'])){
            $_SESSION['username'] = $_POST['username'];
             header("refresh:2; home.php");
             echo "Profile name updated";
        }
        else{
?>
    <form action="" method="post">
        <Label>Update Profile name</Label>
        <input type="text" name="username" value="<?php echo $username ; ?>" id="username">
        <input type="submit" value="Update">
    </form>
    <?php
        }
    ?>
<?php 
    }else{
        header("refresh:3 ; signin.php");
        echo "Unothorized access";
    }    
?>

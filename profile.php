<?php
    session_start();
    require"lib/conn.php";
    
   

    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $user_qr = mysqli_query($con, "SELECT * FROM `users` WHERE `name` = '$username'");
        $Userobj = mysqli_fetch_object($user_qr);
        
        if(isset($_POST['updateprofile'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            mysqli_query($con,"UPDATE `users` SET `name` = '$name', `email` = '$email', `phone` = '$phone'  WHERE `name` = '$username'");
            $_SESSION['username'] = $name;
             header("refresh:2; home.php");
             echo "Profile updated";
        }
        
?>
    <form action="" method="post" style = "width:500px; margin: auto;">
        <input type ="hidden" name ="updateprofile" >
        <h2>Update your Profile </h2>
        <Table>
        
        <tbody>
            <tr>
                <td>Name</td>
                <td> <input type="text" name="name" id="name"  value = "<?php echo $Userobj->name ?>"> </td>
             </tr>
             <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" value ="<?php echo $Userobj->email ?>" ></td>

            <tr>
                <td>Phone</td>
                <td><input type="phone" name="phone" id="phone" value ="<?php echo $Userobj->phone ?>" > </td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Update</button></td>
                
            </tr>
            <tr>
                <td></td>
        </tr>
    </tbody>
    </Table>
    </form>
    <?php
        
    ?>
<?php 
    }else{
        header("refresh:3 ; signin.php");
        echo "Unothorized access";
    } 
?>

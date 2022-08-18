<?php
    session_start();
    require"lib/conn.php";
    $username = $_SESSION['username'];
    $user_qr = mysqli_query($con, "SELECT * FROM `users` WHERE 'name' = '$username'");
    $Userobj = mysqli_fetch_object($user_qr);
    echo $Userobj['username'];

    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        
        if(isset($_POST['username'])){
            $_SESSION['username'] = $_POST['username'];
             header("refresh:2; home.php");
             echo "Profile name updated";
        }
        else{
?>
    <form action="" method="post" style = "width:500px; margin: auto;">
        <input type ="hidden" name ="register" >
        <h2>Update your Profile </h2>
        <Table>
        
        <tbody>
            <tr>
                <td>Name</td>
                <td> <input type="text" name="name" id="name"  value = "<?php echo" " ?>"> </td>
             </tr>
             <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" value ="<?php echo "" ?>" ></td>

            <tr>
                <td>Phone</td>
                <td><input type="phone" name="phone" id="phone" value ="<?php echo "" ?>" > </td>
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
        }
    ?>
<?php 
    }else{
        header("refresh:3 ; signin.php");
        echo "Unothorized access";
    } 
?>

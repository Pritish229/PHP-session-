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
    <form action="" method="post" style = "width:500px; margin: auto;">
        <input type ="hidden" name ="register" >
        <h2>Register Here </h2>
        <Table>
        
        <tbody>
            <tr>
                <td>Name</td>
                <td> <input type="text" name="name" id="name"> </td>
             </tr>
             <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="phone" name="phone" id="phone"></td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Register</button></td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                    Alredy a Registred ? <a href="signin.php">Signin</a>
                </td>
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

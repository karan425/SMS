<?php
session_start();
if (isset($_SESSION['uid'])) {
   
    header('location:admin/admindash.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<h1 align="center">Admin Login</h1>
<form action="login.php" method="post">
    <table align="center">
        <tr>
            <td>Username</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
        </tr>
    </table>
</form>
    
</body>
</html>

<?php

include ('dbconnection.php');
if (isset($_POST['login'])) {
   
    $username = $_POST['name'];
    $password = $_POST['password'];


    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";

    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        # code...
        ?>
        <script>
            alert('Username or Password not match !!');
            window.open('login.php','_self'); 
        </script>
        <?php
    }else {
        
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];

        echo "id = ".$id;

        //Session
        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
    }
}

?>
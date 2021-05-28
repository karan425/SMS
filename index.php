<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <h3 align="right" style="margin-right:20px;"><a href="login.php">Admin</a></h3>
    <h1 align="center">Welcome to Student Management System</h1>
    
    <form action="index.php" method="post">
        <table style="width:30%;" align="center" border="1">
            <tr>
                <td colspan="2" align="center">Student Informainon</td>
            </tr>
            <tr>
                <td align="left">Choose Standerd</td>
                <td>
                <input type="number" name="std">
                </td>
            </tr>
            <tr>
                <td align="left">Enter Rollno</td>
                <td><input type="text" name="rollno"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
    # code...
    $std = $_POST['std'];
    $rollno = $_POST['rollno'];

    include('dbconnection.php');
    include('showfunction.php');

    showdetails($std,$rollno);
    
}


 ?>
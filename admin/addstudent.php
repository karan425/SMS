<?php
    session_start();
    if(isset($_SESSION['uid'])){
        
    }else{
       header('location:../login.php');
    }
?>
<?php
include('header.php');
?>

<form action="addstudent" method="post" enctype="multipart/form-data">
    <table align="center" style="width:30%; margin-top:40px;">
        <tr>
            <td>Roll No</td>
            <td><input type="text" name="rollno" placeholder="Enter Your Roll No" required></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="name" placeholder="Enter Your Full Name" required></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" placeholder="Enter Your City Name" required></td>
        </tr>
        <tr>
            <td>Parents Contact No</td>
            <td><input type="text" name="pcon" placeholder="Enter Your Parents Contact NO" required></td>
        </tr>
        <tr>
            <td>Stsnderd</td>
            <td><input type="text" name="std" placeholder="Enter Your Standerd" required></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="img" required></td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td colspan="2" align = 'center'> <input type="submit" value="submit" name="submit"></td>
        </tr>
    </table>

</form>


</body>
</html>

<?php

if (isset($_POST['submit'])) {
    # code...
    include('../dbconnection.php');

    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $imagename = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");

    $qry  = "INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES (NULL,'$rollno','$name','$city','$pcon','$std','$imagename')";

    $run = mysqli_query($con,$qry);
    if ($run == true) {
        # code...
        ?>

        <script>
            alert('Data Inserted Successfully');
        </script>
        <?php
        
        
    }

}

?>
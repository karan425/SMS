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

<table align="center">
<form action="deletestudent.php" method="Post">
    <tr>
        <th>Enter Standerd</th>
        <td><input type="text" name = "std" placeholder="Enter Standerd" required></td>
    
        <th>Enter Student Name</th>
        <td><input type="text" name = "name" placeholder="Enter Standerd" required></td>
    
        <td colspan="2"><input type="submit" name="submit" value="submit"></td>
    </tr>

</table>
<br>
</form>

<table align="center"  width="80%" border="1" >
    <tr style="background-color:red;">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Delete</th>
    </tr> 
    <?php
if (isset($_POST['submit'])) {
    # code...
    include('../dbconnection.php');

    $std = $_POST['std'];
    $name = $_POST['name'];

    $qry = "SELECT * FROM `student` WHERE `standerd`='$std' AND `name` LIKE '%$name%'";
    $run = mysqli_query($con,$qry);
    if (mysqli_num_rows($run) < 1) {
        # code...
        echo "<tr><th colspan='5'>NO Recoreds found</th></tr>";
    }else{
        $count = 0;
        while($data = mysqli_fetch_assoc($run)){
            $count++;
            ?>
            <tr align="center">
                <td><?php echo $count ?></td>
                <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"></td>
                <td> <?php echo $data['name'];?></td>
                <td><?php echo $data['rollno'];?></td>
                <td><a href="Deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>

            <?php
        }
    }


}

?>
</table>
</body>
</html>

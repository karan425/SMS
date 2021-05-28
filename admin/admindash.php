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


<div class="dashboard">
    <table  align="center" style="width:30%; margin-top:50px;">
        <tr>
            <td>1.</td>
            <td><a href="addstudent">Insert Student Details</a></td>
        </tr>
        <tr>
            <td>2.</td>
            <td><a href="updatestudent">Update Student Details</a></td>
        </tr>
        <tr>
            <td>3.</td>
            <td><a href="deletestudent">Delete Student Details</a></td>
        </tr>
    </table>
</div>



</body>
</html>
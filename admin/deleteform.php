<?php


    # code...
    include('../dbconnection.php');

   $id = $_REQUEST['sid'];

    $qry  = "DELETE FROM `student` WHERE `id`='$id'";

    $run = mysqli_query($con,$qry);
    if ($run == true) {
        # code...
        ?>

        <script>
            alert('Data Deleted Successfully');
            window.open('deletestudent.php','_self');
        </script>
        <?php

}

?>
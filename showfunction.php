<?php 

function showdetails($std,$rollno){
	include('dbconnection.php');

	$qry = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$std'";

	$run = mysqli_query($con,$qry);

	if (mysqli_num_rows($run) > 0) {
		# code...
		$data=mysqli_fetch_assoc($run);
		?>
		<table border="1" style="width:80%; height: 50%; margin-top: 30px;" align="center">
			<tr>
				<th colspan="5">Student Details</th>
			</tr>
			<tr>
				<th rowspan="5"><img src="dataimg/<?php echo$data['image']; ?> " style="max-width: 150px; max-height: 120px;"></th>
				<th>Roll No</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<th>Standerd</th>
				<td><?php echo $data['standerd']; ?></td>
			</tr>
			<tr>
				<th>city</th>
				<td><?php echo $data['city']; ?></td>
			</tr>
			<tr>
				<th>parents contact no</th>
				<td><?php echo $data['pcont']; ?></td>
			</tr>

		</table>




		<?php

	}else{
		echo "<script>alter('NO Student Found !!!')</script>";

	}
}

 ?>
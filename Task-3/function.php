<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php

function showdetails($standard,$rollno){
	include('dbcon.php');
	$sql="select * from studentnew where rollno='$rollno' and standard='$standard';";
	$run=mysqli_query($con,$sql);
	$row=mysqli_num_rows($run);
	if($row>0){
		$data=mysqli_fetch_assoc($run);
		?>
		<br>
		<div class="container">
		<table align="center" width="80%" border="1" style="margin-top: 10px;font-size:large">
		<tr class="table-success">
			<th>RollNo</th>
			<th>Name</th>
			<th>Contact No</th>
			<th>Standard</th>
			<th>City</th>
		</tr>
		<tr class="table-success">
			<td style="font-size:larger"><?php echo $data['rollno']; ?></td>
			<td style="font-size:larger"><?php echo $data['name']; ?></td>
			<td style="font-size:larger"><?php echo $data['pcont']; ?></td>
			<td style="font-size:larger"><?php echo $data['standard']; ?></td>
			<td style="font-size:larger"><?php echo $data['city']; ?></td>
	</tr>
	</div>
		<?php
	}
	else{
		echo "<script>alert('No records Found!!!');</script>";
	}

}

?>
</html>

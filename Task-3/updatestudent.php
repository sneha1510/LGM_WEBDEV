<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/buttoncss.css">
        <link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
session_start();
if(isset($_SESSION['uid'])){
	echo "";
}


?>

<?php
include('header.php');
include('titlehead.php');
?>

<table align="center">
<!--<form method="post" action="updatestudent.php">
	<tr>
		<th>Enter Standard</th>
		<td><input type="number" name="standard" placeholder="Enter standard" required></td>
	</tr>
	<tr>
		<th>Enter Name</th>
		<td><input type="text" name="stuname" placeholder="Enter Name" required></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Search" required></td>
	</tr>
	
</form>-->
<form method="post" action="updatestudent.php">   
	 <center>        
	<h2>Enter standard
	<input type="number" name="standard" placeholder="Enter standard" required>&nbsp;</h2><h2>
                <br>
				Enter Name                   
				<input type="text" name="stuname" placeholder="Enter Name" required><br></h2>
                 <br>
				 <input type="submit" name="submit" value="Search" class="button"required>
</center>
				</form>
				<div class="container">   
<table align="center" width="80%" border="1" style="margin-top: 10px;font-size:large">
	<tr class="table-success" style="font-size:large">
		<th>No</th>
		<th>Name</th>
		<th>Rollno</th>
		
		<th>Edit</th>
	</tr>
</div>
	<?php
	if(isset($_POST['submit'])){
		include('dbcon.php');
		$std=$_POST['standard'];
		$name=$_POST['stuname'];

		$sql="select * from studentnew where standard='$std' and name like '%$name%';";
		$run=mysqli_query($con,$sql);
		$row=mysqli_num_rows($run);
		

		if($row<1){
			echo "<tr><td colspan='5'>No Records Found</tr></td>";
		}
		else{
			$count=0;
			while($data=mysqli_fetch_assoc($run)){
				$count++;
				?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']; ?></td>
					<td><a href="updateform.php?sid=<?php echo $data['rollno'];?>">Edit</a></td>
	</tr>
				<?php
			}
		}

	}
	?>


</table>
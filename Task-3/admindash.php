<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/buttoncss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
if(isset($_SESSION['uid'])){
	echo "welcome..";
}
else{
	header('login.php');
}

?>

<?php
include('header.php');
?>

	<div class="adminstyle" align="center">
		<h4><a href="logout.php" style="float:right;margin-right:30px;color:red;font-size:20px;">Logout</a></h4>
		<h1><center>Welcome to Admin Dashboard</center></h1>
	</div>
	
	<div class="container" style="text-align:center">
	<div class="btn-group-vertical" >
	<button type="button" class="button" style=" background-color:pink"><a href="addstudent.php">Insert Student Details</a></button>
	<br>
    <button type="button" class="button" style=" background-color:pink"><a href="updatestudent.php">Update Student Details</a></button>
	<br>
    <button type="button" class="button" style=" background-color:pink"><a href="deletestudent.php">Delete Student Details</a></button>
	<br>
</div>
</div>
</body>
</html>
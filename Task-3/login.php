<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:admindash.php');
}
?>

<html>
<head>
	<title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/buttoncss.css">
        <link rel="stylesheet" type="text/css" href="css/formstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="box-sizing: content-box;" >

	<form method="post" action=login.php>
     <center><h1><p style="text-align:center;"><u>ADMIN LOGIN</u>&nbsp;</h1></p>
             <br>
             <h2>Username 
                 <span class="glyphicon glyphicon-user"></span>&nbsp;
                 <input type="text" id="uname" name="uname">&nbsp;</h2><h2>
                <br>
                   Password  <span class="glyphicon glyphicon-lock"></span> &nbsp;
                   <input type="password" id="pass" name="pass"><br></h2>
                 <br>
                <input type="submit" class="button" name="login" value="Login">
                    <a href="index.php"><h2><b>Click here to go back</b></h2></a>
	</form>
</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login'])){
	$username=$_POST['uname'];
	$password=$_POST['pass'];

	echo "".$username;
	echo "".$password;
	$query="select * from admin where username = '$username' and password = '$password';";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	echo $row;

	if($row<1)
    {
		?>
		<script>alert('Username or Password does not match !!')</script>
		<script>window.open('login.php','_self')</script>
		
    <?php 
	}
	else{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		echo "id".$id;

		session_start();
		$_SESSION['uid']=$id;
		echo "".$_SESSION['uid'];
		header('location:admindash.php');
	}
}
?>
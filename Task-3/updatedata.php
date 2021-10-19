<?php 
		include('dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['std'];
        $sub1=$_POST['sub1'];
		$sub2=$_POST['sub2'];
		$sub3=$_POST['sub3'];
		$sub4=$_POST['sub4'];
		$sub5=$_POST['sub5'];
		$sub6=$_POST['sub6'];
		//$tot=$sub1+$sub2+$sub3+$sub3+$sub4+$sub5+$sub6;
		//$per=$tot/600*100;
		$per=$_POST['per'];		
		
		$query="update studentnew set rollno='$rollno',name='$name',city='$city',pcont='$pcon',standard='$std',hindi='$sub1',english='$sub2',maths='$sub3',science='$sub4',history='$sub5',geography='$sub6',percentage='$per' where rollno='$rollno';";
		$run=mysqli_query($con,$query);
		if($run==true){
			?>

			<script>
				alert('Data Updated Successfully.');
			</script>
			<script>window.open('admindash.php','_self')</script>
			<?php
		}
?>
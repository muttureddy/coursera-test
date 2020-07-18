<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>


	<form  method="post"  action="http://localhost/HotelManagement/Hotel-Management/exp.php" >
		f<input type="text" name="fname" >
		l<input type="text" name="login" >
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
session_start();
$fname = $_POST['fname'];   
$lname = $_POST['login'];
	$con =mysqli_connect('localhost','root','','test');
	$in ="INSERT INTO `tblogin`(`fname`, `login`) VALUES ('$fname','$login')";
	$re = mysqli_query($con,$in);
if (!$re) {
	
echo "hello";
	} ?>		
</body>
</html>


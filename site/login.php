
<?php
session_start();
include('dbtest.php');
//$con = mysqli_connect('localhost','root','','test');
$username = $_POST['username'];
$password = $_POST['password'];


$select = "SELECT  /*,Username,Password*/ * FROM login Where Username = '$username' and Password = '$password'";

$result = mysqli_query($con,$select) or die(mysqli_error());

$num = mysqli_num_rows($result);

$message1="Login Successfull";
$message2="Username And Password are Not matched";
$Rooms="Homepage.php";


if($num == 1){
	 $_SESSION['username'] = $username;
	echo "<script type='text/javascript'>alert('$message1');</script>";
	echo "<script type='text/javascript'> window.location = '$Rooms';</script>";
}else{
	echo "<script type='text/javascript'>alert('$message2');</script>";
	include('Home.php');
	
}

?>

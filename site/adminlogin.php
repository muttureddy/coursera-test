<?php
session_start();
$con = mysqli_connect('localhost','root','','test');
$adminuser = $_POST['adminuser'];
$adminpass = $_POST['adminpass'];

$ad = "SELECT * FROM admin Where Username = '$adminuser' and Password = '$adminpass'";
$resu = mysqli_query($con,$ad) or die(mysqli_error());


$num = mysqli_num_rows($resu);

$message1="Login Successfull";
$message2="Username And Password are Not matched";
$Rooms="adminuser.php";


if($num == 1){
	 $_SESSION['adminuser'] = $adminuser;
	echo "<script type='text/javascript'>alert('$message1');</script>";
	echo "<script type='text/javascript'> window.location = '$Rooms';</script>";
}else{
	echo "<script type='text/javascript'>alert('$message2');</script>";
	include('Home.php');
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>


<?php
session_start();
// header('Location:Homepage.php');

$firstname = $_POST['firstname'];   
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','','test');

$select = "SELECT * FROM login Where Username = '$username'";

$result = mysqli_query($conn,$select) or die(mysqli_error());

$num = mysqli_num_rows($result);

$message1="User alredy exists";
$message2="Registeration succusess,Please Login";
$home="Home.php";

if($num == 1){

echo "<script type='text/javascript'>alert('$message1');</script>"; 
echo "<script type='text/javascript'> window.location = '$home';</script>";
    
}
else
{
    $reg ="INSERT Into `login`(`Firstname`, `Lastname`, `Email`, `Username`, `Password`) VALUES ('$firstname','$lastname','$email','$username','$password')";
        mysqli_query($conn,$reg);
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'> window.location = '$home';</script>";
}


?>
</body>
</html>
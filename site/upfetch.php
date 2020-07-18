
<?php  
  session_start();
if(!isset($_SESSION["username"]))
{
  
 header("location:Home.php");
}
?>


<?php 
include 'dbtest.php';
      $username = $_SESSION["username"];
                  $tsql = "select * from login where Username= '$username'";
                  $tre = mysqli_query($con,$tsql) or die( mysqli_error($con));
$row=mysqli_fetch_array($tre);

echo json_encode($row);
                
 ?>
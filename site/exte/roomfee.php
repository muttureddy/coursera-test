<?php
$con = mysqli_connect('localhost','root','','test');
if(!empty($_POST["troom"])) 
{	
$id=$_POST['troom'];
$stmt = mysqli_query($con,"SELECT * FROM rooms WHERE roomtype = $id");
$result = mysqli_num_rows($stmt);
?>
 <?php
 while($row=mysqli_fetch_array($stmt1))
 {
  ?>
 <?php echo $row['fees']; ?>
  <?php
 }
}



if(!empty($_POST["troom"])) 
{	
$id=$_POST['rid'];
$stmt = $DB_con->prepare("SELECT * FROM rooms WHERE room_no = :id");
$stmt->execute(array(':id' => $id));
?>
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
 <?php echo htmlentities($row['fees']); ?>
  <?php
 }
}

?>
<?php 
 
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:Home.php");
}
 ?>
<?php 
include('dbtest.php');
      $username = $_SESSION["username"];
                  $tsql = "select * from roomb where Username = '$username'";
                  $tre = mysqli_query($con,$tsql) or die( mysqli_error($con));
while($trow= mysqli_fetch_array($tre))
                  {  
                      $fname=$trow['Fname'];
                      $lname= $trow['Lname'] ;
                      $email=$trow['Email'];  
                      $tRoom= $trow['TRoom'] ;
                      $cin=$trow['cin'];
                      $cout=$trow['cout'];
                      $status=$trow['status'];
                      $nodays=$trow['No_days'];
                  }
 ?>

<!DOCTYPE>
<html>
<head>
<title>pay</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  

<nav class="navbar navbar-" style="width: 60%;float: right; margin:10px   -160px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">&#9776;HOTEL ONY</a>&emsp;&emsp;  
    </div>
    &emsp;&emsp;
    <ul class="nav navbar-nav">
      <li ><a href="" onclick="halert();">Home</a></li>
      <!-- <li ><a href="reservation.php">Booking</a></li> -->
      <li class="active"><a href="payment.php">Payment</a></li>
      <!-- <li><a href="userprofile.php">Profile</a></li> -->&emsp;&emsp;&emsp;&emsp;
    </ul>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; 
  <a href="logout.php"><span class="btn btn-danger navbar-btn" ><i class="fa-fa-sign-out">Logout</i></span></a>
  </div>
</nav>

<script>
  function halert() {
   alert('Page Not accesseble,Complete the payment');
  }
</script>


<div class="container" >
  <h1>Payment details</h1><br>
    <form action="payment.php" method="post" style="width: 100%;float: left">
  <div class="form-group" >
    <div class="form-group">
  <label for="name">Name:</label>
    <input id="name"  required="" type="text" value ="<?php echo"$fname $lname" ?>" readonly class="form-control">
</div>
<div class="form-group">
    <label >Email:</label>
    <input type="email"  class="form-control" readonly value ="<?php echo"$email" ?>" >
  </div>
  <div class="form-group">
    <label >Card Type:</label> <span style="font-size: 20px;"><i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i></span>
    <select  name="type" class="form-control" >
                    <option value="Debit card">Debit Card</option>
                    <option value="Credit card">Credit Card</option>
    </select>
  </div>
<div class="form-group">
  <label for="name">Card Name:</label>
    <input id="name" name="name" placeholder="Name on card" required="" type="text" class="form-control">
</div>

<div class="form-group">
    <label for="cardno">Card Number:</label>
    <input id="caedno" name="num" maxlength="16" placeholder="1111-2222-3333-4444" required="" type="text" class="form-control">
</div>
<div class="form-group ">
    <label >Exp Month/Year</label>
    <select name="month" style="width: 15%" class="form-control ">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>  
        <option>December</option>
    </select>
    <select name="year" style="width: 15%; float: right;margin: -34px 450px ;"id="focusedInput" class="form-control ">
                <option>2020</option>
                <option>2021</option><option>2022</option>
                <option>2023</option><option>2024</option>
                <option>2025</option><option>2026</option>
                <option>2027</option><option>2028</option>
                <option>2030</option><option>2031</option>
                <option>2032</option><option>2033</option>
                <option>2034</option><option>2035</option>
                <option>2036</option> 
    </select>
  </div>

  <div class="form-group">
  <label for="password">CVV:</label>
    <input id="password" name="cvv" placeholder="Number" required="" maxlength="3" type="password" class="form-control">
  </div>

  <div class="form-group">
  <label >Address:</label>
    <input name="address" placeholder="Address" maxlength="19" required="" type="text" class="form-control">
  </div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary" >
<input type="reset" name="reset" value="Reset" class="btn ">
</form>
</div></form></div>
<?php
include('dbtest.php');

if(isset($_POST['submit']))
{

  $emai = $email;
  $un = $_SESSION["username"];
  $card_type = $_POST['type'];
  $m = $_POST['month'];
  $y = $_POST['year'];
  $card_no = $_POST['num'];
  $card_name = $_POST['name'];
  $cv_no = $_POST['cvv'];
  $adrs = $_POST['address'];
  $room = "1000";
  $amou = "1000";

  mysqli_query($con,"INSERT INTO `payment`(`uname`, `email`, `card_type`, `card_name`, `card_no`, `month`, `year`, `cvv`, `address`, `room_no`,'amount') VALUES ('$un','$emai','$card_type','$card_name','$card_no','$m','$y','$cv_no','$adrs','$room','$amou')");

// if ($result) {
//     echo "<script type='text/javascript'>alert('PAYMENT SUCCES');</script>";
//   }
//   else{
//     echo "<script type='text/javascript'>alert('Payment failed');</script>";
//   }
}


?>
</div>

<div class="container">

  <label class="label-info btn "><h4>Room Details: </h4></label>
 <br><br>
 <label class="label-primary btn ">Room Type:  &nbsp;</label><br><br>
 <label class="label-primary btn ">Room Number:  &nbsp;</label><br><br>
<label class="label-primary btn ">No.of People:  &nbsp;</label> <br><br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<label class="label-primary btn ">Total Amount:  &nbsp;</label>
</body>
</html>
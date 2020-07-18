<?php  
  session_start();
if(!isset($_SESSION["username"]))
{
  
 header("location:Home.php");
}
?>
<?php
include('dbtest.php');
//$con =  mysqli_connect('localhost','root','','test');
if(isset($_POST['submit']))
{

  $emai = $_POST['email'];
  $un = $_POST['uname'];
  $card_type = $_POST['type'];
  $m = $_POST['month'];
  $y = $_POST['year'];
  $card_no = $_POST['num'];
  $card_name = $_POST['name'];
  $cv_no = $_POST['cvv'];
  $adrs = $_POST['address'];
  $room = "100";
  mysqli_query($con,"INSERT INTO `payment`(`uname`, `email`, `card_type`, `card_name`, `card_no`, `month`, `year`, `cvv`, `address`, `room_no`) VALUES ('$un','$emai','$card_type','$card_name','$card_no','$m','$y','$cv_no','$adrs','$room')");}
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
<body><div class="container">
  

<div class="container" style="width: 60%;margin-left:-20px;float: left">
  <h1>Payment details</h1><br>
    <form action="paymentmain.php" method="post" style="width: 100%;float: left">
  <div class="form-group" action="payment.php" method="post">
    <div class="form-group">
  <label for="name">Name:</label>
    <input id="name" name="uname" placeholder="Name" required="" type="text" class="form-control">
</div>
    <label >Email:</label>
    <input type="email" name="email" class="form-control" name="password1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label >Card Type:</label>
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
        <option>Jun</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>May</option>
        <option>Jun</option>
        <option>July</option>
        <option>Aug</option>
        <option>Sep</option>
        <option>Oct</option>
        <option>Nov</option>  
        <option>Dec</option>
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
</div>

<div class="container" style=" background-color: #f1f1f1;border-style:ridge;border-spacing: 5px;padding: auto; border-radius: 10px; width: 25%; position: fixed;margin: 150px 0px 0px 700px; ">

  <label class="label-info btn "><h4>Room Details: </h4></label>
 <br><br>
 <label class="label-primary btn ">Room Type:  &nbsp;</label><br><br>
 <label class="label-primary btn ">Room Number:  &nbsp;</label><br><br>
<label class="label-primary btn ">No.of People:  &nbsp;</label> <br><br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<label class="label-primary btn ">Total Amount:  &nbsp;</label>
</div>
</div>
</div>
</body>
</html>


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
  <a href="logout.php"><span class="btn btn-danger navbar-btn" >Logout</span></a>
  </div>
</nav>
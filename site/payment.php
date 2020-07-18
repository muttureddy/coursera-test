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
                      $people = $trow['People'];
                      $cout=$trow['cout'];
                      $status=$trow['status'];
                      $nodays=$trow['No_days'];
                  }
 ?>

<?php 
include('dbtest.php');
     
                  $sql = "select * from rooms where roomtype = '$tRoom' ";
                  $re = mysqli_query($con,$sql) or die( mysqli_error($con));
while($row= mysqli_fetch_array($re))
                  {  
                      $room_no = $row['room_no'];
                      $amount = $row['fees'];
                  }
 ?>
<?php
include('dbtest.php');
//$con =  mysqli_connect('localhost','root','','test');
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
  $room = $room_no;
  $amount = $amount;
 $result = mysqli_query($con,"INSERT INTO `payment`(`uname`, `email`, `card_type`, `card_name`, `card_no`, `month`, `year`, `cvv`, `address`, `room_no`, `amount`) VALUES ('$un','$emai','$card_type','$card_name','$card_no','$m','$y','$cv_no','$adrs','$room',' $amount')");
  if ($result) {

        $statusupdate = mysqli_query($con,"UPDATE roomb SET status = 'Confirmed' where Username = '$un'");

    echo "<script type='text/javascript'> window.location = 'Homepage.php';</script>";
  }
}
?>



<!DOCTYPE>
<html>
<head>
<title>pay</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css" media="screen">
   
  body {
      margin: 0;
      font-family:'TIMES NEW ROMAN', sans-serif;
      background-color: rgb(9,25,42);
       position: fixed;
       background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
    }

  </style>
</head>
<body>


  <fieldset>
    <!-- navigation bar -->
  <nav class="navbar navbar-inverse" style="width: 45%;float: right; margin:10px 20px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">&#9776;HOTEL ONY</a>&emsp;&emsp;  
    </div>
    &emsp;
    <ul class="nav navbar-nav">
      <li ><a  onclick= "halert();" href="Homepage.php">Home</a></li>
      <li  ><a  href="reservation.php" onclick="palert();" >Booking</a></li>
      <li class="active"><a href="payment.php" >Payment</a></li>
      <li><a href="userprofile.php">Profile</a></li>
    </ul>&emsp;&emsp;
  <a href="logout.php"><span class="btn btn-danger navbar-btn" >Logout</span></a>
  </div>
</nav>

<script>
  function halert() {

        var r = confirm("The form data will clear,Do you want to clear data?");
        if (r) {
          window.location.href = "Homepage.php";
        }
    }
  
 
 

  function palert() {
   alert('Page Not accesseble,Fill The Reservation form');
  }
</script>

<div class="container" style="width: 45%;background-color: #f1f1f1;border-style:ridge;border-spacing: 5px;border-radius: 10px;margin:10px 0px 0px 50px;float: left">
  <h1>Payment details</h1><br>
    <form action="payment.php" method="post" style="background-color: #f1f1f1;width: 100%;padding: auto; ">
  <div class="form-group" method="post">
    <div class="form-group">
  <label for="name">Name:</label>
    <input id="name" name="uname" readonly="" value="<?php echo "$fname $lname" ?>"  required="" type="text" class="form-control">
</div>
    <label >Email:</label>
    <input type="email" name="email" readonly="" value="<?php echo "$email" ?>"  class="form-control" name="password1" placeholder="name@example.com">
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
    <input  name="num" maxlength="16" placeholder="1111-2222-3333-4444" required="" type="text" class="form-control">
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
</div>

<div class="container" style=" background-color: #f1f1f1;border-style:ridge;border-spacing: 5px;padding: auto; border-radius: 10px; width: 30%; position: fixed; margin: 150px 0px 0px 910px ;padding:20px; ">

  <label class="label-info btn "><h4>Room Details: </h4></label>
 <br><br>
 <label class="label-primary btn ">Room Type:  &nbsp;</label>--------------------------<label class="label-primary btn"><?php echo $tRoom ?></label><br><br>
 <label class="label-primary btn ">Room Number:  &nbsp;</label>----------------------<label class="label-primary btn"><?php echo $room_no ?></label><br><br>
<label class="label-primary btn ">No.of People:  &nbsp;</label>------------------------<label class="label-primary btn"><?php echo $people ?></label><br><br>
<label class="label-primary btn ">Booking Status:  &nbsp;</label>----------------------<label class="label-primary btn"><?php echo $status ?></label><br><br>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<label class="label-primary btn ">Total Amount:  &nbsp;</label>-------------------------<label class="label-primary btn">Rs.<?php echo $amount ?>/-</label>
</div>


</fieldset>
</body>
</html>

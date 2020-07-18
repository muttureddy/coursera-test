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
                  $tsql = "select * from payment where uname= '$username'";
                  $tre = mysqli_query($con,$tsql) or die( mysqli_error($con));
                  $data = mysqli_num_rows($tre);
                  if($data < 1){
                    echo "<script>alert('payment details not found')</script>";
                   include('reservation.php');
                }else{

while($trow=mysqli_fetch_array($tre))
                  { 
                      $sl_no= $trow['sl_no'] ;
                      $email=$trow['email'];
                      $card_type= $trow['card_type'] ;
                      $card_name=$trow['card_name'];
                      $card_no=$trow['card_no'];
                      $month=$trow['month'];
                      $year=$trow['year'];
                      $cvv=$trow['cvv'];
                      $address=$trow['address'];
                      $room_no=$trow['room_no'];
                      $amount =$trow['amount'];
                  }
                   echo "<script>alert('Payment deatils found')</script>";
                }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>userdetails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="sidebar.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="sidebar">
  <a href="Homepage.php">Homepage</a>
  <a  href="userprofile.php">Profile</a>
  <a  href="roomdetails.php">Bookings</a>
  <a class="active" href="paymentdetails.php">Payment deatils</a>
  <a href="reservation.php">Reservation</a>
  <a href="payment.php">Payment</a>
  
</div>


<div style="width: 100%;height: 50px;margin-left: 200px; position: fixed; background-color: #f1f1f1; ">

  <h3 style="float: right;margin-right: 800px"> Username:   <?php echo $_SESSION["username"] ?></h3>
<a href="logout.php" title=""><span style="float: right;margin-right: -800px;margin-top:6px;font-size: 30px;"><i class="fa fa-sign-out">Logout</i></span></a>

</div>




   
 <div class="content"> 
  <h2>Payment Deatils</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">UserName:</label>
      <div class="col-sm-10">
        <input  class="form-control" readonly value= "<?php echo $_SESSION["username"] ?>";>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$email"; ?>" readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Card Type:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$card_type"; ?>" readonly  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name On card:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$card_name"; ?>"  readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Card Number:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$card_no"; ?>" readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Exp Month/Year:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$month / $year"; ?>" readonly  class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">CVV:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$cvv"; ?>" readonly  class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$address"; ?>"  readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Room No:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$room_no"; ?>"  readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Paid:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$amount"; ?>"  readonly class="form-control" >
      </div>
    </div>
  </form>  

</div>


<!-- Booking Deatails -->


</div>
</body>
</html>
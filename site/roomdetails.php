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
                  $tsql = "select * from roomb where Username= '$username'";
                  $tre = mysqli_query($con,$tsql) or die( mysqli_error($con));
                  $data = mysqli_num_rows($tre);
                  if($data < 1){
                    echo "<script>alert('Booking deatils not found,Opening Booking')</script>";
                     echo "<script type='text/javascript'> window.location = 'reservation.php';</script>";
                }else{

while($trow=mysqli_fetch_array($tre))
                  { 
                      $sl_no= $trow['Sl_no'] ;
                      $fname=$trow['Fname'];
                      $lname= $trow['Lname'] ;
                      $email=$trow['Email'];
                      $nation=$trow['National'];
                      $phone= $trow['Phone'] ;
                      $troom= $trow['TRoom'] ;
                      $people=$trow['People'];
                      $cin=$trow['cin'];
                       $cout=$trow['cout'];
                        $status=$trow['status'];
                         $nodays=$trow['No_days'];
                  }
                   echo "<script>alert('Booking deatils found')</script>";
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
  <a class="active" href="roomdetails.php">Bookings</a>
  <a href="paymentdetails.php">Payment deatils</a>
  <a href="reservation.php">Reservation</a>
  <a href="payment.php">Payment</a>
  
</div>


<div style="width: 100%;height: 50px;margin-left: 200px; position: fixed; background-color: #f1f1f1; ">

  <h3 style="float: right;margin-right: 800px"> Username:   <?php echo $_SESSION["username"] ?></h3>
<a href="logout.php" title=""><span style="float: right;margin-right: -800px;margin-top:6px;font-size: 30px;"><i class="fa fa-sign-out">Logout</i></span></a>

</div>




   
 <div class="content"> 
  <h2>Booking Deatils</h2>
  <form class="form-horizontal"">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input  class="form-control" disabled value= "<?php echo " $fname $lname ";?>";>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$email"; ?>" disabled class="form-control" >
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nationality:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$nation"; ?>" disabled class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$phone"; ?>" disabled class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Room Type:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$troom"; ?>" disabled  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">People:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$people"; ?>"  disabled class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Status:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$status"; ?>" disabled class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Check In:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$cin"; ?>" disabled  class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Check Out:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$cout"; ?>" disabled  class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">No.days:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$nodays"; ?>"  disabled class="form-control" >
      </div>
    </div>
  </form>  

</div>


<!-- Booking Deatails -->


</div>
</body>
</html>
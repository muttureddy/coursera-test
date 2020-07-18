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
                  $data = mysqli_num_rows($tre);
                  if($data < 1){
                    echo "<script>alert('Userdetails deatils not found')</script>";
                    
                }else{

while($trow=mysqli_fetch_array($tre))
                  { 
                      $id= $trow['Sl_no'] ;
                      $fname=$trow['Firstname'];
                      $lname= $trow['Lastname'] ;
                      $email=$trow['Email'];
                      $username=$trow['Username'];
                      $password=$trow['Password'];
                      
                  }
                   
                }
 ?>

 <!DOCTYPE>
<html>
<head>
<title>Reservation</title>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css" media="screen">
	

  body {
      margin: 0;
      font-family:'TIMES NEW ROMAN', sans-serif;
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
      <li class="active" ><a  href="reservation.php"  >Booking</a></li>
      <li><a href="" onclick="palert();">Payment</a></li>
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


<!-- Reservation form -->

<div class="container" style="width: 45%;background-color: #f1f1f1;border-style:ridge;border-spacing: 5px;border-radius: 10px;margin:10px 0px 0px 50px;float: left">
  <h1>	RESERVATION FORM</h1><br>
    <form action="reservation.php" method="post" style="background-color: #f1f1f1;width: 100%;padding: auto; ">
    <div class="form-group">
  <label for="fname">FirstName *:</label>
    <input id="fname" name="fname"placeholder="Name" value="<?php echo "$fname" ?>" readonly type="text" class="form-control">
</div>

<div class="form-group">
  <label for="lname">LastName *:</label>
    <input id="lname" name="lname" placeholder="Name" value="<?php echo "$lname" ?>" readonly type="text" class="form-control">
</div>
<div class="form-group">
    <label >Email * :</label>
    <input type="email" name="email" class="form-control"  value="<?php echo "$email" ?>" readonly placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label>Nationality *:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label>
      <input type="radio" name="nation" value="Indian" checked="">Indian
     </label>
     <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="nation"  value="Non Indian ">Non Indian
     </label>
                   
  </div>
<div class="form-group">
  <label for="phone">Phone No *:</label>
    <input id="phone" maxlength="10" name="phone"   placeholder="Phone Number" required="" type="text" class="form-control">
</div>

<div class="form-group">
    <label for="cardno">Type Of Room *</label>
    <select name="troom"  required class="form-control">
                        <option value="">Select Room Type</option><?php 
                        include ('dbtest.php');
                        $query ="SELECT * FROM rooms";
                        $stmt2 = mysqli_query($con,$query);
                        
                        while($row=mysqli_fetch_array($stmt2))
                        {
                          $data[]=$row;
                          
                        ?>
                        <option value="<?php echo $row['roomtype'];?>"> <?php echo $row['roomtype']; ?></option>
                        <?php }
                         ?>
                        </select> 
</div>
<div class="form-group ">
    <label >No.of People *</label>
    <input id="people" maxlength="10" name="people"   placeholder="No.of People" required="" type="text" class="form-control">
  </div>

  <div class="form-group">
  <label for="cin" class="control-label" >Check-In *:</label>
    <input id="cin" name="cin" placeholder="dd/mm/yyyy" required=""  type="date" class="form-control">
  </div>

<div class="form-group">
  <label for="cout" class="control-label" >Check-Out *:</label>
    <input id="cout" name="cout" placeholder="dd/mm/yyyy" required=""  type="date" class="form-control">
  </div>

</div>  

<div class="container" style=" background-color: #f1f1f1;border-style:ridge;border-spacing: 5px;padding: auto; border-radius: 10px; width: 30%; position: fixed; margin: 150px 0px 0px 910px ;padding:20px; ">
 <h2> HUMAN VERIFICATION </h2>
  <p>Type the Random  code below &emsp;
            <h3 style="color: #00aabb">&emsp; &emsp;<?php $Random_code=rand(); echo$Random_code; ?></h3 style="color: #00aabb"> </p><br>
         
          <h3>Enter the random code</h3>
              <input style="width: 50%" type="text" name="code1" title="random code" value="" class="form-control">
              <input type="hidden" name="code" value="<?php echo $Random_code; ?>" /><br>
            <input type="submit" name="submit" value="Submit" class="btn btn-success  " >&emsp;&emsp;&emsp;
            <input type="reset" name="reset" value="Reset" class="btn btn-info">
</div>
  </form>
  <?php

    include 'dbtest.php';
    $username = $_SESSION["username"];
    $chec="SELECT * FROM roomb WHERE Username = '$username'";
    $rs = mysqli_query($con,$chec);
              if(isset($_POST['submit']))
              {
              $code1=$_POST['code1'];
              $code=$_POST['code']; 
              if($code1!=$code)
              {
              $msg="Invalide code"; 
              echo "<script type='text/javascript'> alert('$msg')</script>";
              }
               
              /*elseif ($rs) {
                 echo "<script type='text/javascript'> alert('You Have alredy Booked a room, Your Details are')</script>";
                 $che="SELECT * FROM payment WHERE uname = '$username'";
                 $r = mysqli_query($con,$che);
                 if ($r) {
                  echo "<script type='text/javascript'> alert('Booking Details Found,Click Room Details')</script>";
                 }
                 else
                 {
                  echo "<script type='text/javascript'> alert('Complete the payment to confirm your booking')</script>";
                  include('payment.php');
                 }
              }*/
              else
              {
              
                  $check="SELECT * FROM roomb WHERE Email = '$_POST[email]'";
                  $rs = mysqli_query($con,$check);
                  $data = mysqli_num_rows($rs);
                    
                  if($data > 1) {
                    echo "<script type='text/javascript'> alert('User diffrent email id')</script>";
                    
                  }

                  else
                  {
                    $new ="Not Conform ";

                  $newUser= "INSERT INTO `roomb`( `Username`, `Fname`, `Lname`, `Email`, `National`, `Phone`, `TRoom`, `People`, `cin`, `cout`, `status`, `No_days`) VALUES ('$username','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[people]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";


                    if (mysqli_query($con,$newUser))
                    {
                      echo "<script type='text/javascript'> alert('Your Booking application has been sent,Please complete the payment')</script>";

                     include 'Homepage.php';
                    }
                    else
                    {
                      echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                      
                    }
                  }

              $msg="Your code is correct";
              }
              }
              ?>

</div>
</fieldset>
</body>
</html>


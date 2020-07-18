<?php  
  session_start();
if(!isset( $_SESSION['adminuser']))
{
  
 header("location:Home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Usedetails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css" media="screen">

   ul{
   
    margin-left: 20px;
  }
  li{
    margin:0px 4px 0px 4px;
  }
</style>
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">&#9776;HOTEL ONY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="adminuser.php">Users<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminbookingdetails.php">Booking Details</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adminpaymentdetails.php">Payment Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminroomdetails.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminfeedbackdetails.php">Feedback</a>
      </li>
      <li class="nav-item dropdown " style="margin-left: 700px;">
        &emsp;  <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle " style="color: #00f;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo  $_SESSION['adminuser'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" style="color: #007;" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

 <h1 class="text-primary text-uppercase text-center">Payment Details</h1>   
 
  <div class="" id="records_content">
    
  </div>
    

<script>

  $(document).ready(function(){

    readRecord();

  })
  
  function readRecord(){
    var readrecord = "readrecord";

    $.ajax({
            url:"adminpaymentfetch.php",
            type:"post",
            data :{readrecord : readrecord },
            success :function(data,status){
              $('#records_content').html(data);
            }
    });
  }




  function Deleteuser(deleteid){
    var conf = confirm("Are you sure?");
    if (conf == true) {
      $.ajax({
         url:"adminpaymentfetch.php",
            type:"post",
            data :{deleteid : deleteid },
            success :function(data,status){
              readRecord();
            }
      });
    }
  }
</script>












</body>
</html>
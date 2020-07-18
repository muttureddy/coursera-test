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
</head>

<style type="text/css" media="screen">

   ul{
   
    margin-left: 20px;
  }
  li{
    margin:0px 4px 0px 4px;
  }
  
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="adminuser.php">&#9776;HOTEL ONY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="adminuser.php">Users<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminbookingdetails.php">Booking Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminpaymentdetails.php">Payment Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminroomdetails.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminfeedbackdetails.php">Feedback</a>
      </li>
      <li class="nav-item dropdown  " style="margin-left: 700px;">
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


  <div class="container">

    <h1 class="text-primary text-uppercase text-center">User Details</h1>
 
  <div class="" id="records_content">
    
  </div>
    
  </div>


<script>

  $(document).ready(function(){

    readRecord();

  })
  
  function readRecord(){
    var readrecord = "readrecord";

    $.ajax({
            url:"adminuserfetch.php",
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
         url:"adminuserfetch.php",
            type:"post",
            data :{deleteid : deleteid },
            success :function(data,status){
              readRecord();
            }
      });
    }
  }


function Getuserdetails(id){
    $('#hidden_userid').val(id);

    $.post("adminuserfetch.php",{
      id:id    
    },function(data,status){
      var user = JSON.prase(data);
      $('#update_firstname').val(user.Firstname);
      $('#update_lastname').val(user.Lastname);
      $('#update_email').val(user.Email);
      $('#update_username').val(user.Username);
      $('#update_password').val(user.Password);
    }     
    );
    $('#update_user_detail').modal('show'); 
    
  }

</script>


<!-- Modal -->
<div class="modal fade" id="update_user_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
            <div class="form-group">
              <label >Firstname *</label>
              <input type="text" class="form-control" id="update_firstname" placeholder="Enter firstname">
            </div>
            <div class="form-group">
              <label >Lastname *</label>
              <input type="text" class="form-control" id="update_lastname" placeholder="Enter lastname">
            </div>
            
            <div class="form-group">
              <label >Email *</label>
              <input type="email" class="form-control" id="update_email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label >Username *</label>
              <input  class="form-control" id="update_username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label >Password *</label>
              <input type="password" class="form-control" id="update_password" placeholder="Enter password">
            </div>
        </form>
      </div>
      <div class="modal-footer">
       
        <button type="button" onclick="updateuserdetails()" class="btn btn-primary">Save</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id = "hidden_userid"> 
      </div>
    </div>
  </div>
</div>


</body>
</html>



























































<?php 

// include('dbtest.php');
// echo "string";

// $query = "select * from login";

// $resul = mysqli_query($con,$query);

// $data = array();
// while ($row = mysqli_fetch_assoc($resul)) {
// 	$data[] =$row;
// 	# code...
// }


// echo json_encode($data);

// // echo "<script>console.log(JSON.prase($data))</script>";
 ?>

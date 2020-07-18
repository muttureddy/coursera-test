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
                   echo "<script>alert('User deatils found')</script>";
                }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>userdetails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="sidebar.css">
<!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="sidebar">
  <a href="Homepage.php">Homepage</a>
  <a class="active" href="userprofile.php">Profile</a>
  <a  href="roomdetails.php">Bookings</a>
  <a href="paymentdetails.php">Payment deatils</a>
  
</div>


<div style="width: 100%;height: 50px;margin-left: 200px; position: fixed; background-color: #f1f1f1; ">

  <h3 style="float: right;margin-right: 800px"> Username:   <?php echo $_SESSION["username"] ?></h3>
<span style="float: right;margin-right: -800px;margin-top:6px;font-size: 30px;"><button type="button" class="btn btn-primary edit"  data-toggle="modal" data-target="#exampleModalLong">Update Details</button><a href="logout.php" title="">&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out">Logout</i></a></span>

</div>

  


   
 <div class="content" style="margin:13% 0px 0px 39%"> 
  <h1>USER PROFILE</h1>
  <form class="form-horizontal" style="width: 50%">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ID</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$id"; ?>" readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input  class="form-control" readonly value= "<?php echo " $fname $lname ";?>";>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$email"; ?>" readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Username:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$username"; ?>" readonly class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$password"; ?>" readonly  class="form-control" >
      </div>
    </div>
  </form>
  <span><button class="btn btn-primary" type="Submit" onclick="document.getElementById('id03').style.display = 'block'">Update details</button></span>  

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" id="app_data_modal" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">UPDATE DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="up.php" method="post" >
      <div class="modal-body">
      <input type="text"class="form-control" name="username" readonly="" id="username" ><br>
      <input type="text" class="form-control" name="fname" id="fname"  required><br>
            <input type="text" class="form-control" name="lname" id="lname"  required><br>
                  <input type="text" class="form-control" name="email" id="email"   required><br>
                        <input type="text" class="form-control" name="password" id="password" required><br>
                          <input type="hidden" class="form-control" name="username" id="Username" required><br>
                    <input type="submit" name="submit" class="btn btn-primary form-control" id="insert" value="Insert">    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <!--   <button type="submit" name="submit" id="update" class="btn btn-primary">Save changes</button>
       --></div>
    </form>

    
       <?php 
include 'dbtest.php';

$username = isset($_POST['username']);
$password = isset($_POST['password']);
//$fname = isset($_POST['fname']);
//$lname = isset($_POST['lname']);
//$email = isset($_POST['email']);

$update = mysqli_query($con,"UPDATE `login` SET Password ='$password'  where Username = '$username' ");
 ?>     
    </div>
  </div>
</div>


<script>
  
  $(document).ready(function(){

    $(document).on('click','.edit',function(){

        var Username = $(this).attr("Username");

        $.ajax({
          url :"upfetch.php",
          method :"POST",
          data :{Username:Username},
          dataType :"json",
          success:function(data){
            $('#fname').val(data.Firstname);
            $('#lname').val(data.Lastname);
            $('#email').val(data.Email);
            $('#password').val(data.Password);
            $('#username').val(data.Username);
            $('#insert').val('update');
            $('#app_data_modal').modal('show');
          }
        })

    })
  })
</script>
</div>
</body>
</html>


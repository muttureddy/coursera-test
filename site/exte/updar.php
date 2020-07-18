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
  <a class="active" href="userprofile.php">Profile</a>
  <a  href="roomdetails.php">Bookings</a>
  <a href="paymentdetails.php">Payment deatils</a>
  
</div>


<div style="width: 100%;height: 50px;margin-left: 200px; position: fixed; background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%); ">

  <h3 style="float: right;margin-right: 800px;margin-top:3px;font-size: 20px "	 class="btn btn-primary"><span> Username:</span> <span></span>  <?php echo $_SESSION["username"] ?></h3>&nbsp;&nbsp;
<a href="logout.php" title="">&nbsp;&nbsp;<span class="btn" style="float: right;margin-right: -800px;margin-top:6px;font-size: 20px;color: red"><i class="fa fa-sign-out">Logout</i></span></a>
</div>




   
 <div class="content " style="margin:13% 0px 0px 39%"> 
  <h1>USER PROFILE</h1>
  <form class="form-horizontal" style="width: 50%">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ID</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$id"; ?>" readonly class="form-control" >
      </div>
    </div><br>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input  class="form-control" readonly value= "<?php echo " $fname $lname ";?>";>
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$email"; ?>" readonly class="form-control" >
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Username:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$username"; ?>" id="username" readonly class="form-control" >
      </div>
    </div> <br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input value="<?php echo "$password"; ?>" readonly  class="form-control" >
      </div>
    </div>
  </form>
  <br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#id03">UPDATE PASSWORD</button>&emsp;&emsp;&emsp;&emsp;
  <button type="button" class="btn btn-primary edit"  data-toggle="modal" data-target="#exampleModalLong">VIEW DETAILS</button>


</div>

<div class="modal fade" id="id03" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user" aria-hidden="true">UPDATE PASSWORD</i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       
      <div class="modal-body">
        <form action="" method="post" >
      <input type="text" class="form-control" name = "use" value="<?php echo "$username"; ?>"  readonly  required><br>
      <input type="password" placeholder="New Password" class="form-control"  name = "pas" required><br>

      <input type="submit" name="submit" class="btn btn-primary form-control"  value="UPDATE">    
</form>
<?php 
/*include 'dbtest.php';
if (isset($_POST['submit'])) {

$update = mysqli_query($con,"UPDATE login SET Password = '$_POST[pas]' where Username = '$_POST[use]'");
if ($up) {
  echo "<script type='text/javascript'>alert('Password Updated');</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Username Not Found');</script>";
  }
  }
*/

include 'dbtest.php';
if (isset($_POST['submit'])) {

$up = mysqli_query($con,"UPDATE login SET Password = '$_POST[pas]' where Username = '$_POST[use]'");

if ($up) {
  echo "<script type='text/javascript'>alert('Password Updated');</script>";
  }
}?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    
      
    </div>
  </div>
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
       <form action="" method="post" >
      <div class="modal-body">
      <input type="text"class="form-control" name="username" readonly="" id="username" ><br>
      <input type="text" class="form-control" name="fname" id="fname"  required><br>
            <input type="text" class="form-control" name="lname" id="lname"  required><br>
                  <input type="text" class="form-control" name="email" id="email"   required><br>
                        <input type="text" class="form-control" name="password" id="password" required><br>
                       	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <!--   <button type="submit" name="submit" id="update" class="btn btn-primary">Save changes</button>
       --></div>
    </form>    
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
            $('#app_data_modal').content('show');
          }
        })

    })
  })
</script>

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
</body>
</html>

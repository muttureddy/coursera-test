<!DOCTYPE html>
<html>
<head>
	<title>www.HM.com</title>
	

<link rel="stylesheet" type="text/css" href="login.css">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css" media="screen">
		
  

	h1{
	margin-top: 70px;
	color: #ff3300;
	mask-type: inherit;
  letter-spacing: 3px;
	text-shadow: 1px 3px 15px Blue;
	font-family: Times New Roman,Times, serif;
	font-size: 90px;  
	/*margin-top: 100px;
*/
  

}
	h3{
	margin-top: 60px;
	color: #abff55;
	mask-type: inherit;
	text-shadow: 1px 3px 15px Blue;
	font-family: Times New Roman,Times, serif;
	font-size: 40px;  
	margin-bottom: -30px;
  font-weight: bold;
}
body
{
	background-image: url(image/Deluxe.jpg);
	background-size: 100%;
	background-position: fixed;
	flex-basis: inherit;
	font-family: Times New Roman,Times, serif;
}

span {
       color: #ffce14;
       font-weight: bold;
}

.logbutton {
  background-color:#33ff33;
  color: white;
  padding: 14px 20px;
  margin-right:  120px ;
  border: none;
  cursor: pointer;
  width: 10%;
  float: right;
  border-style: ridge;
  border-radius: 10px;
}



	</style>
 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
  $(document).ready(function(){
    $(".logbutton").click(function(){
      $(".wel ").hide(1000);
    });
    $(".close").click(function(){
        $(".menu-bar,.wel").show(1000);
    });

    $(".password").click(function(){
      $("#id02").show(1000);
    });
  });
</script>

</head>
<body>

 	<h2 align="left" ><i class="fa fa-paper-plane-o">Hotel <span>ONY</span></i></h2>
   <hr>



<div class="wel">
<br><br><br><br><br>

<h3 align="center">WELCOME <br><br>TO </h3><br>
<h1 align="center">HOTEL<span> ONY</span> </h1>

<br><br><br><br>
 </div>  
  <hr>



 	<button id="login" class="logbutton"  onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-sign-in"> Login </i></button> 
  <button id="login" class="logbutton" onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-user-plus" >Signup </i></button> 




  <button id="login" style="float: left" class="logbutton" onclick="document.getElementById('admin').style.display='block'"><i class="fa fa-user" >ADMIN</i></button> 




<div id="id01" class="modal">
  <form class="modal-content animate" action = "login.php" method = "POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
    <label>UserName</label>
       <input type="text" placeholder="username" name = "username" required onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
    <label>Password</label>
        <input type="password" placeholder="password" name = "password" required onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
    <button class="login" type="submit">Login</button><br>
    <input type="checkbox" checked="checked" name="remember"> Remember me<br>
    <button type="button" onclick="document.getElementById('id01').style.display=''" class="cancelbtn">Cancel</button>
    <span class="password"  onmousedown="document.getElementById('id03').style.display='block';">Forgot Password<i class="fa fa-key"></i></a></span>
    </div>
  </form>
</div>


<div id="id02" class="modal">
  <form class="modal-content animate" action = "signup.php" method = "POST" style="width: 27%;height: 60%">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <h2 align="center"><i class="fa fa-user">Register</i></h2>
    <div class="container">
      <input type="text" placeholder="Firstname" name = "firstname" required>
      <input type="text" placeholder="Lastname" name = "lastname" required>
      <input type="text" placeholder="Email" name = "email" required>
      <input type="text" placeholder="Username" name = "username" required>
      <input type="password" placeholder="Password" name = "password" required>
    <button class="login" type="Submit">Signup</button>
    <!-- <button type="button" onclick="document.getElementById('id02').style.display=' '" class="cancelbtn">Cancel</button> -->
    </div>
  </form>
</div>

<!-- forgot password -->

<div id="id03" class="modal">
  <form class="modal-content animate" action = "Home.php" method = "POST"  style="width: 20%;height: 40%">
    <div class="imgcontainer" >
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <h2 align="center"><i class="fa fa-user">Update</i></h2>
    <div class="container">
      
      <input type="text" placeholder="Username" name = "use" required>
      <input type="password" placeholder="New Password" name = "pas" required>
    <button class="login" name="update" type="submit">Update</button>
   <button type="button" onclick="document.getElementById('id03').style.display=' none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



<!-- admin part -->
<div id="admin" class="modal">
  <form class="modal-content animate" action = "adminlogin.php" method = "POST">
    <div class="imgcontainer">
      <h3>ADMIN LOGIN</h3>
      <span onclick="document.getElementById('admin').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
    <label>UserName</label>
       <input type="text" placeholder="username" name = "adminuser"   required onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
    <label>Password</label>
        <input type="password" placeholder="password" name = "adminpass" required onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
    <button class="login" type="submit" name="adminsubmit">Login</button>
    <button type="button" onclick="document.getElementById('admin').style.display=''" class="cancelbtn">Cancel</button>
    </div>
  </form>

<?php 
include 'dbtest.php';
if (isset($_POST[update])) {

$up = mysqli_query($con,"UPDATE login SET Password = '$_POST[pas]' where Username = '$_POST[use]'");

if ($up) {
  echo "<script type='text/javascript'>alert('Password Updated');</script>";
  }
}
 ?>

</div>




 
</body>
</html>
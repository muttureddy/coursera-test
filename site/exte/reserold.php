<?php 
if(!isset($_SESSION["username"]))
{
// header("location:Home.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>


<style type="text/css" media="screen">

body{
		 background-color: rgb(9,25,42); 
}

.panel-heading{
	text-align: center;
	color: red;
	padding:none;
	width: 100%;
	font-size: 20px;
	
}
h1{
	color: red;
	margin-left: -100px;
	font-family: sans-serif;

}

.personal{
	width: 400px;
	margin-left: 50px;
	border-color: red;
	position: absolute;
	padding: 30px;
	border-style: ridge;
	background-color: #b3daff;
	margin-top: 20px;

}
.row{
	width: 400px;
	float: right;
	margin-right: 50px;
	margin-top: 20px;
	border-color: red;
	background-color: #b3daff;
	padding: 20px;
	padding-left: 40px;
	padding-right:40px;
	border-style: ridge;
	margin-bottom: 200px;
}
.home{
	float: left;
	width: 100px;
	margin-top: 20px;
	height: 40px;
	border-radius: 20%;
	transition-duration: 0.4s;

}

.home:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}

input{
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.header {
  background-color: transparent;
  padding: 20px;
  text-align: center;
}

.register{
	
}

</style>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>

<div class="register">
<fieldset>

<div class="header">
<a href="Homepage.php" title=""><button class="home" ><i class="fa fa-home"></i>HOME Page</button></a>
	<h1 align="center">RESERVATION FORM </h1>
<?php echo "'$_SESSION[username]'"; ?>
</div>

</fieldset>	




<div>
	  <div class="personal">
                        
					<fieldset>
						<legend><div class="panel-heading">
                          PERSONAL INFORMATION 
                        </div></legend>
						<form name="form" method="post">
                            <div >
                                           
                                    <label>Username</label>        
                                     <input  name="user" required>
                              </div>
							  <div >
                                            <label>First Name</label>
                                            
                                            <input name="fname" required>
                                            
                               </div>
							   <div >
                                            <label>Last Name</label>
                                            <input name="lname"  required>
                                            
                               </div>
							   <div >
                                            <label>Email</label>
                                            <input name="email" type="email"  required>
                                            
                               </div>
							   <div >
                                            <label>Nationality*</label>
                                            <label>
                                                <input type="radio" name="nation" value="Indian" checked="">Indian
                                            </label>
                   
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Indian ">Non Indian
                                            </label>
                         
                                </div>

								<div >
                                            <label>Phone Number</label>
                                            <input name="phone"  required>        
                               </div>
							  
                   
                     </fieldset>   
                    </div>

          <div class="row">
                <fieldset>
                	<legend><div class="panel-heading">
                            RESERVATION INFORMATION
                        </div></legend>
               
                    <div class="panel panel-primary">
                        
                        <div >
								<div >
                                            <label>Type Of Room *</label>
                                            <select name="troom"  required>
												<option value="">Select Room Type</option><?php 
												include 'dbtest.php';
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
												<span id="room-availability-status" style="font-size:12px;"></span>	
                              </div>
							 
							  <div >
                                            <label>No.of People*</label>
                                            <input name="people" type ="number" value="notnull">
                              </div>
							  <div >
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" >
	                                            
	                               </div>
							   <div >
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" >
                                            
                               </div>
                       </div>
                        
                    </div>
               </fieldset>	
		</div>
	</div>


	
		<div style="margin-top: 650px;">
			<fieldset>
				<legend><div class="panel-heading">
                           HUMAN VERIFICATION
                        </div></legend>
					 <p>Type Below this code 
					 	<?php $Random_code=rand(); echo$Random_code; ?> </p><br />
					 	<br>
					<p>Enter the random code<br /></p>
							<input style="width: 30%" type="text" name="code1" title="random code" value="" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" style="width: 30%" name="submit" class="btn btn-primary">
	</form>
</fieldset>
		<?php

		include 'dbtest.php';
		
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!=$code)
							{
							$msg="Invalide code"; 
							echo "<script type='text/javascript'> alert('$msg')</script>";
							}
							else
							{
							//$con=mysqli_connect("localhost","root","","test");
									$check="SELECT * FROM roomb WHERE Email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_num_rows($rs);
										
									if($data > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform ";

									$newUser=	"INSERT INTO `roomb`( `Username`, `Fname`, `Lname`, `Email`, `National`, `Phone`, `TRoom`, `People`, `cin`, `cout`, `status`, `No_days`) VALUES ('$_POST[user]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[people]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";


										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent,Please complete the payment')</script>";

											echo "<script type='text/javascript'> window.location = 'payment.php';</script>";
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


 

</div>

</body>
</html>


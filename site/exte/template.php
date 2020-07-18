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

<style>
  
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  body {
      margin: 0;
      font-family:'TIMES NEW ROMAN', sans-serif;
      background-color: rgb(9,25,42);
    }

</style>



</head>

<body>

<div class="navbar-header" style="width: 10%;background-color:#f2f2f2; border-radius: 10px; margin: 10px 0px 0px 2px;">
  &emsp;  <span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776;<a class="navbar-brand">HOTEL ONY</a></span>   
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Homepage.php">Homepage</a>
  <a class="active" href="userprofile.php">Profile</a>
  <a  href="roomdetails.php">Bookings</a>
  <a href="paymentdetails.php">Payment deatils</a> 
  </div>
</div>

<!-- 

<div class="sidebar">
  <a href="Homepage.php">Homepage</a>
  <a class="active" href="userprofile.php">Profile</a>
  <a  href="roomdetails.php">Bookings</a>
  <a href="paymentdetails.php">Payment deatils</a>
  
</div>

 -->

 <div style="width: 100%;height: 50px;margin-left: 200px; position: fixed; background-color: #f1f1f1; ">

  <h3 style="float: right;margin-right: 800px"> Username:  </h3>
<a href="logout.php" title=""><span style="float: right;margin-right: -700px;margin-top:6px;font-size: 30px;"><i class="fa fa-sign-out">Logout</i></span></a>

</div>


 <div class="content"> 

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>


</body>
</html>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
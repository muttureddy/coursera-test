 
<?php  
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:Homepage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="room.css">
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="Homepage.css">
<link rel="stylesheet" type="text/css" href="galleryslide.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
marquee{
background-color: transparent;
text-shadow: 2px 1px #fff;
color: red;
}
  body {
      margin: 0;
      font-family:'TIMES NEW ROMAN', sans-serif;
    }


.read{
background-color:#33ff33;
color: white;
padding: 3px 3px;
width: 10%;
border: none;
cursor: pointer;
border-style: ridge;
border-radius: 20px;
}
.echouser{
   color: blue;
  text-align: center;
  font-size: 30px;
  font-family: Times New Roman,Times, serif;
   padding-right: 50px;

}
.welcome{
  color: red;
  font-size: 20px;
  padding-right: 10px;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<!--   <marquee direction="left">The Project Created By SANTOSH BOTAGI </marquee>
 -->

          <div class="banner-top">
          <div class="contact-bnr-w3-agile">
          <ul>
            <li><span class="echouser"><span class="welcome">Welcome</span><?php echo  $_SESSION['username'] ?> </span></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@HOTELONY.COM</a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i>+91 99222-99222</li>  
            </ul>
           </div>
          </div>
            

<h1 style="margin-left:70px;"><a class="navbar-brand" href="Homepage.php">HOTEL <span>ONY</span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1><!-- <div><h1 align="center"><font size="30px"><b>Hotel ONY</b></font></h1> -->

<!-- Menu Bar code -->
        <div class="menu-bar"  >
            <ul>
            <li class="active"><a href="Homepage.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="#about"><i class="fa fa-info"></i>About Us</a></li>
            <li><a href="#room"><i class="fa fa-bed"></i>Rooms</a></li>
            <li><a href="#gallery"><i class="fa fa-picture-o">Gallery</i></a></li>
            <li><a href="#"><i class="fa fa-info"></i>Services</a></li>
            <li><a href="#"><i class="fa fa-phone "></i>Contact Us</a></li>
            <li style="margin-left:0px;"><a href="userprofile.php"><i class="fa fa-user"></i>User Profile</a></li>
            </ul>
        </div>
  


            <div id="home">
            <div class="slider">
                <ul class="rslides " >
                <li><div class="banner-top container">
                    <div class="hotelony">
                    <h4>HOTEL ONY</h4> <br>
                    <h3>We know what you love</h3><br>
                    <p>Welcome to our hotel</p>
                    <div>
                    <button class="read" style="text-align: center;" onclick="document.getElementById('myModal').style.display='block'" >Read More</button>
                    <div id="availability-agileits">
                    <div class="RESERVATION">
                    <a href="reservation.php"><h2>ROOM RESERVATION</h2></a>
                    </div>
                    </div>
                    </div>  
                    </div>
                    </div>
                  </li>
                <div  class="thim-click-to-bottom" style="margin-top: 600px;" id="arrow">
                <a href="#about" ><i class="fa fa-long-arrow-down"></i></a>
                </div>
                </ul>
            </div>
            </div>




<script type="text/javascript">
$(document).ready(function(){

$('.close').click(function(){
$("#arrow").show(300);
});

});
</script>



           <div class="modal" id="myModal" onmouseover="document.getElementById('arrow').style.display='none'" >
            <div class="modal-content animate" >
            <div class="imgcontainer">
             <span onclick="document.getElementById('myModal').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
            <h4>HOTEL  <span>ONY</span></h4>
                        <img src="image/Deluxe.jpg" alt=" " class="img-responsive">
                        <h5>We know what you love</h5>
                <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.We have awesome services and friendly staff while you are here.</p>
            </div>
            </div>
            </div>

        


<!-- About -->
    <div class="about-wthree container" style="position:" id="about">
       <div class="ab-w3l-spa">
           <h3 class="title-w3-agileits title-black-wthree container ">About Our HOTEL ONY</h3> 
           <p class="about-para-w3ls">EXPERIENCE A GOOD STAY, ENJOY FANTASTIC OFFERS FIND OUR FRIENDLY WELCOMING RECEPTION</p>
                <div class="container" >
                <img src="home.jpg" style="width: 70px; height: 70px"; alt="">
                <img src="home.jpg" style="width: 70px; height: 70px"; alt="">
                <img src="home.jpg" style="width: 70px; height: 70px"; alt="">
                  <div style="width: 50%;margin: 0 0 0 25%;">                       
                  <p class="lead" ><strong>After a smooth landing at Kempegowda International Airport, where a Hotel Ony representative warmly greets you and assists with your arrival, you are charmed by the vibrant and historical cityscape of Bengaluru. When you reach Hotel Ony, Bengaluru, in the heart of India’s Garden City, you marvel at the elegant double-height lobby and enjoy a refreshing cup of tea while live piano music plays in The Lobby Lounge. An experienced and welcoming member of the staff shows you to your room for a private check-in while you take in the panoramic city views.</strong></p>
                  </div>
                    <div class="info-about">
                     <h4>You'll love all the amenities we offer!</h4>
                     <p>Welcome</p>
                    </div>
                </div><br><br><br><br>
        <div class="clearfix"> </div>
      </div>
    </div>




<!-- Rooms and Rent -->
<div class="about-wthree container " id="room"; style="background-color: red">
  <h3 class="title-w3-agileits title-black-wthree" >Rooms And Rates</h3>

<div class="card" style="background-color: blue;">
  <img src="image/Deluxe.jpg" alt="" style="width:300px;height: 300px;">
    <h1  align="center">Deluxe Room</h1>
    <div class="star" align="left">
              <ul>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
              </ul>
          </div>
    <h4><b>Price : Rs 20,000/-</b></h4> 
    <p> <a href="reservation.php" ><button >Book Now</button></a></p>    
</div>
    
          <div class="card img-fluid img-thumbnail">
          <img src="image/Deluxe.jpg" alt="" style="width:300px;height: 300px;">
          
          <div class="star" align="left">
              <ul>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
              </ul>
          </div>
          
          <p> <a href="reservation.php" ><button >Book Now</button></a></p>
          </div>

          <div class="card">
          <img src="image/Guest.jpg" alt="" style="width:100%">
          <h1 align="center">Guest House</h1>
          <div class="star" align="left">
                <ul>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
          </div>
          Price : Rs 16,000/-
          <p> <a href="reservation.php" ><button >Book Now</button></a></p>
          </div>

          <div class="card">
          <img src="image/luxury.jpg" alt="" style="width:100%;height: 150%;">
          <h1 align="center">Luxury Room</h1>
          <div class="star" align="left">
                <ul>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
          </div>
          Price : Rs 13,000/-
          <p> <a href="reservation.php" ><button >Book Now</button></a></p>
          </div>

          <div class="card">
          <img src="image/single.jpg" alt="" style="width:100%">
          <h1 align="center">Single Room</h1>
          <div class="star" align="left">
              <ul>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                 <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
              </ul>
          </div>
          Price : Rs 7,500/-
          <p> <a href="reservation.php" ><button >Book Now</button></a></p>
          </div>  
  
</div>
<!-- end of rooms -->
<br><br><br><br><br>



<div class="about-wthree" id="gallery" style="margin-top: -20px">
  <h3 class="title-w3-agileits title-black-wthree" style="margin-top:-25px; margin-bottom: 10px">Gallery</h3>
<div class="container">
<!-- Galary slides -->
<div class="slideshow-container">

<div class="mySlides fade">
<div class="numbertext">1 / 10</div>
<img src="image/Deluxe.jpg" style="width: 100%; height: 100%;">
<div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
<div class="numbertext">2 / 10</div>
<img src="image/g3.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
<div class="numbertext">3 / 10</div>
<img src="image/g1.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
<div class="numbertext">4 / 10</div>
<img src="image/g2.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
<div class="numbertext">5 / 10</div>
<img src="image/g8.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
<div class="numbertext">6 / 10</div>
<img src="image/g4.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
<div class="numbertext">7 / 10</div>
<img src="image/g9.jpg" style="width:100%;height: 170%;">
<div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
<div class="numbertext">8 / 10</div>
<img src="image/g11.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>


<div class="mySlides fade">
<div class="numbertext">9 / 10</div>
<img src="image/g7.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>


<div class="mySlides fade">
<div class="numbertext">10 / 10</div>
<img src="image/g10.jpg" style="width:100%;height: 100%;">
<div class="text">Caption Three</div>
</div>



</div>
<br>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>
</div>
</div>


<script>
var slideIndex = 0;
showSlides();
function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}    
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div class="arr-w3ls">
<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</body>
</html>

 


<?php 
session_start()
?>


<!DOCTYPE html>
<html>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
      $("#flip1").click(function(){
      $("#panel1").slideToggle("slow");
    });
      $("#flip2").click(function(){
      $("#panel2").slideToggle("slow");
    });
      $("#flip3").click(function(){
      $("#panel3").slideToggle("slow");
    });
      $("#flip4").click(function(){
      $("#panel4").slideToggle("slow");
    });

     $("#flip5").click(function(){
     $("#panel5").slideToggle("slow");
    });
     $("#flip6").click(function(){
     $("#panel6").slideToggle("slow");
    });
     $("#flip7").click(function(){
     $("#panel7").slideToggle("slow");
    });
     $("#flip8").click(function(){
     $("#panel8").slideToggle("slow");
    });
     $("#flip9").click(function(){
     $("#panel9").slideToggle("slow");
    });
     $("#flip10").click(function(){
     $("#panel10").slideToggle("slow");
    })
     $("#flip11").click(function(){
     $("#panel11").slideToggle("slow");
    });
     $("#flip12").click(function(){
     $("#panel12").slideToggle("slow");
    });
     $("#flip13").click(function(){
     $("#panel13").slideToggle("slow");
    });
     $("#flip14").click(function(){
     $("#panel14").slideToggle("slow");
    });
     $("#flip15").click(function(){
     $("#panel15").slideToggle("slow");
    });
     $("#flip16").click(function(){
     $("#panel16").slideToggle("slow");
    });
});
</script>

<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">	
<link href="./package1.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="contact.css">
<link rel="stylesheet" type="text/css" href="buttonup.css">

		<title>KL tours | Contact Us</title>

  </head>

   <header>

            <div class="login">
      <?php  
      if (isset($_SESSION['username'])) {

        echo $_SESSION['username']; 
        echo '<form action="logout.inc.php" method="POST">';
        echo '<button type="submit" name="submit">LOGOUT </button>';
        echo '</form>';
        echo '<a href="cart.php" class ="cart"><img src="https://cdn0.iconfinder.com/data/icons/shopping-set-4/512/18-512.png" 
       style="width:35px;height:35px;float:right ; position:relative ; top:5px; right:9px;"></a>'; 
        echo '<a href="history.php" class ="cart"><img src="history.jpg" 
       style="width:35px;height:35px;float:right ; position:relative ; top:5px; right:9px;"></a>'; 
        echo '<a href="personal.php" class ="cart"><img src="profile2.png" 
       style="width:35px;height:35px;float:right ; position:relative ; top:5px; right:9px;"></a>'; 
           
       

     }else{
        echo '<a href="login.php">LOG IN </a> &nbsp&nbsp&nbsp';
        echo '<a href="register.php"> SIGN UP </a>';
     }   
  
    ?>
  </div>
</header>
</br></br></br></br>




	<div class = "navi">
    <a href="home.php">
 				<div class="topLogo">
 					<img src="logo.png" style="width:150px;height:190px ">
        </a>
 				</div>
      </div>

 	  


<div class="nav">
 <ul>
  <li><a href="home.php"><b>HOME</b></a></li>
  <li class="dropdown">
   <div class="dropbtn"><a href="packages.php"><b>&#9776 PACKAGES</b></a></div>


    <div class="dropdown-content">

      <a href="package1.php"> <b>&#9656 Historical Tour</b></a>
      <a href="package2.php"><b>&#9656 Shopping Spree</b></a>
      <a href="package3.php"><b>&#9656 Adventure Time</b></a>
      <a href="package4.php"><b>&#9656 King Of Hill</b></a>
    </div>
</li>
   <li><a href="contact.php"><b>CONTACT US</b></a></li>
     <li><a href="about.php"><b>ABOUT</b></a></li>
</ul>
</div>








</head>


</br></br></br></br></br></br></br></br></br>

<body>
  <div class="contactus">
	Contact Us</br>
</div>
</br></br>
<div id="map" style="width:700px;height:400px; margin-right: auto; margin-left: auto"></div>

<script>
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng( 2.942918, 101.875947),
        zoom: 10,  
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuqQLhQWi9k1NZ3RzikAvWrB541QEQz7g&callback=myMap"></script>


<div class="big">
<h1 style="text-align: left; position: relative; top:170px;left:22%;">PLAY KL Sdn Bhd</h1>
<div class="location">
  <h4>Address</h4>
<p style="font-size:17px; text-align:left;">The University of Nottingham Malaysia Campus  </br> Jalan Broga </br> 43500 Semenyih 
Selangor Darul Ehsan </br> Malaysia</p>
</div>

<img src="https://c1.staticflickr.com/3/2855/8900083772_0c77646df8_b.jpg" height="300" width="450" style="display:inline-block;position:relative;left:22%;">

<div class="contactUs">
  <h4>Contact Info</h4>
   <p style="font-size:17px; text-align: left;">Mobile Number : 016-7236436</br>Office Number : 07-2345321</br>Email:  tour@playkl.com</p>
</div>

<div class="working">
  <h4>Operating Hours</h4>
  <p style="font-size:17px; text-align: left;"> Monday to Friday: </br>10:00 am - 7:00 pm</br>Saturday: </br> 10:00 am - 6:00 pm</br>Sunday & Public Holidays: </br>12:00 pm - 6:00 pm</p>
</div>
</div>

</body>


</br></br></br></br></br>








	
<footer>
    <div id ="footer">
    <div class="bottom">

      <div class = "social" style="position: relative; bottom:30px;">
        </br>
              <h2>SOCIAL MEDIA </h2>
              <p class = "btmText">Follow us for more update</p>

              <span class="btmLogo1"><img width="20" height="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/2000px-F_icon.svg.png"></span> 
              <span class="btmLogo2"><img width="20" height="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2000px-Instagram_logo_2016.svg.png"></span> 
              <span class="btmLogo3"><img width="20" height="20" src="http://moziru.com/images/logo-clipart-twitter-7.png"></span> </br></br>
             
          </div>


          <div class = "about">
              <h2>PLAYKL.COM</h2>
              <p class = "btmText">Managed by : TonyLai Travel Tours Sdn Bhd</br>ROC : 8123489M</br>MATTA : MA3233 </br> Tourism Ministry License : KPL/LN/6225 </p>

          </div>

          <div class = "contact">

              <h2>CONTACTS</h2>
              <p class = "btmText">The University of Nottingham Malaysia Campus</br>Jalan Broga </br>43500 Semenyih </br>Selangor Darul Ehsan </br>Malaysia</br>Mobile Number : 016-7236436</br>Office Number : 07-2345321</p>

          </div>

          

      <span class="btm">
      Copyright &copy; 2018 myHouse. All rights reserved.</br></br>
      </span>
 
    </div>  


</footer>
</html>
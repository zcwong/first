<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
  <link href="./index2.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KL tours</title>
   
  <div class = "username">  
    <?php  if (isset($_SESSION['username'])) : ?>
   
      <p class = "username"><?php echo $_SESSION['username']; ?></p>

  <?php endif ?>

  </div>
  <div class = "logout">

    <a href="index.php?logout='1'"  class="button">LOGOUT</a>
    <a href="#" class ="cart"><img src="https://cdn0.iconfinder.com/data/icons/shopping-set-4/512/18-512.png" style="width:35px;height:35px;float:right ; position:relative ; top:5px; right:12px;">
  </div>
 


  <!-- top banner and navigation bar -->
  <div class = "navi">
        <div class="topLogo">
          <img src="logo.png" style="width:150px;height:190px; ">
  </div>

<div class="nav">
 <ul>
  <li><a href="#Home"><b>Home</b></a></li>
  <li class="dropdown">
   <div class="dropbtn"><a href="../WEB DESIGN/packages.html"><b>Packages</b></a></div>


    <div class="dropdown-content">

      <a href="../WEB DESIGN/package1.html"> <b>Package 1</b></a>
      <a href="#"><b>Package 2</b></a>
      <a href="#"><b>Package 3</b></a>
       <a href="#"><b>Package 4</b></a>
    </div>
</li>
   <li><a href="#Contact Us"><b>Contact Us</b></a></li>
     <li><a href="#About"><b>About</b></a></li>
</ul>
</div>



</head>



</br></br></br></br>
<body><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slide1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slide3.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slide4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
function hover(element) {
    element.setAttribute('src', 'http://dummyimage.com/100x100/eb00eb/fff');
}
function unhover(element) {
    element.setAttribute('src', 'http://dummyimage.com/100x100/000/fff');
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



</br></br></br>
<div class="texts">
      <h1>Explore the capital city of Malaysia</h1>
      
    </div>

  </br></br></br>

<div class = intro>
  <p>Our sightseeing tours provides high value for money and ensures a breathtaking experience around KL. Check off your Kuala Lumpur bucket list such as Petronas Twin Tower, </br>Kuala Lumpur Tower, The National Monument and The National Mesuem .Our experience tour guide will provide detailed desciptions for each locale , ensuring that you will learn</br> more about the rich history of each sight .For nature lovers , don't forget to catch a glimpse of Asia's exotic animals by dropping by the National Zoo and take a trip to the </br>famous Batu Caves and witness the beauty of mother nature itself! Regardless of your tour package, we guarantee you the best deals in Malaysia. You will have the opportunity </br>to explore the unique beauty of Malaysia in comfort and style, without hurting your pockets, to ensure a truly fun-filled experience in KL. </p></br></br></br></br>

</div>

<div id ="footer">
    <div class="bottom">

      <div class = "social" style="position: relative; bottom:30px;">
        </br>
              <h2>SOCIAL MEDIA </h2>
              <p class = "btmText">Follow us for more update</p>

              <span class="btmLogo1"><img width="20" height="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/2000px-F_icon.svg.png"></span> 
              <span class="btmLogo2"><img width="20" height="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2000px-Instagram_logo_2016.svg.png"></span> 
              <span class="btmLogo3"><img width="20" height="20" src="http://moziru.com/images/logo-clipart-twitter-7.png"></span> </br></br>
              <span class="btmLogo4"><img width="20" height="20" src="http://files.softicons.com/download/social-media-icons/new-social-media-icons-by-mohamed-elgharabawy/png/256x256/email.png"></span>
              <span class="btmLogo5"><img width="20" height="20" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/youtube-256.png"></span> 
              <span class="btmLogo6"><img width="20" height="20" src="http://files.softicons.com/download/social-media-icons/flat-social-media-icons-by-uiconstock/png/256x256/googleplus.png"></span> 
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
      <p>Copyright &copy; 2018 myHouse. All rights reserved.</p>
      </span>
 
    </div>  

<footer>


</html>

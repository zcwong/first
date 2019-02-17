<?php
session_start();
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
<link rel="stylesheet" type="text/css" href="package4.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="buttonup.css">

		<title>KL tours | Genting Highands</title>

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







<body>
</br></br></br></br></br></br></br></br>



<div class="bgimg-1">
  <div class="caption">
     <!-- Using AOS makes the fade down effect for the KING OF HILL main title-->
    <div class="item" data-aos="fade-down">
     <span class="border" style="background-color:transparent;font-size:68px;color:black;">KING OF HILL</span>
  </div>
</div>
</div>

<div style="position:relative;">
<div style="color: black; background-color:white;text-align:center;padding:150px 80px;text-align: justify">


  <div class="w3-card-4 w3-margin">
     <!-- Using AOS makes the fade right effect for the SKY AVENUE title-->
    <div class="item" data-aos="fade-right">

  <p><div class="places"><center><b>SKY AVENUE</b></center> </div></p>
</div>

</br></br>
 <!-- Using AOS makes the fade left effect for the contain -->
<div class="item" data-aos="fade-left">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="SA2.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="SA1.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides fade">
  <div class="numbertext"> 3/ 3</div>
  <img src="SA3.jpg" style="width:918px;height:500px">

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
</div>

</br></br></br>

 <!-- Using AOS makes the fade right effect for the DESCIPTION-->

   <div class="item" data-aos="fade-right">
  <div class="description">
  &nbsp  DESCRIPTION
  </div>

</br>
  <div class="essay">
   <p><div id="flip1">Highlights</div> </p>
   
<div id="panel1">   

  &#8883 A new retail experience at 6,000 feet</br>


  &#8883  There is plenty to eat, play and shop at SkyAvenue, our latest lifestyle mall! </br>
  &#8883 Dive into the spectacular SkySymphony show (Level 1), a free-to-public performance showcasing an extraordinary orchestra of audio, visual and kinetic winch technology.  </br>
  &#8883 A world-class LED display spreads across the mall’s atrium, creating spellbinding multimedia content that surrounds you and create memories to last a lifetime. </br>
  &#8883 With more than 100 retail options, SkyAvenue is a haven for shoppers. You can get everything ranging from your everyday needs to exquisite jewellery, timepieces, shoes and gadgets. </br>
  &#8883Extensive dining choices to meet every budget need are available at SkyAvenue. You can pick from renowned restaurants such as Burger & Lobster London, the world’s first Cafés Richard brasserie, and Brooklyn’s favourite neighbourhood pizzeria Motorino; or settle down at familiar favourites such as Madam Kwan’s, Morganfield’s, Tampopo, and many more! </br>


</div>



 <p><div id="flip2">Optional</div> </p> 

<div id="panel2"> 
&#8883 Snacks and beverages.

</div>



  
  </div>
</div>
</div>
</div>
</div>


<div class="bgimg-2">
  <div class="caption">
     <!-- Using AOS makes the fade up effect for the quote -->
    <div class="item" data-aos="fade-up">
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">“Dare to live the life you’ve always wanted.”</span>
  </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
  </br>
<div class="w3-card-4 w3-margin">
   <!-- Using AOS makes the fade left effect for the CHIN SWEE CAVES TEMPLE title-->
<div class="item" data-aos="fade-left">
  <p><div class="places2"><center><b>CHIN SWEE CAVES TEMPLE</b></center> </div></p>
</div>
</br></br>

 <!-- Using AOS makes the fade right effect for the contain -->
<div class="item" data-aos="fade-right">
<div class="slideshow-container2">

<div class="mySlides2 fade2">
  <div class="numbertext2">1 / 3</div>
  <img src="temple2.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides2 fade2">
  <div class="numbertext2">2 / 3</div>
  <img src="temple1.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides2 fade2">
  <div class="numbertext2">3 / 3</div>
  <img src="temple4.jpg" style="width:918px;height:500px">

</div>


<a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
<a class="next2" onclick="plusSlides2(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot2" onclick="currentSlide2(1)"></span> 
  <span class="dot2" onclick="currentSlide2(2)"></span> 
  <span class="dot2" onclick="currentSlide2(3)"></span> 
</div>
</div>

</br></br></br>
 <!-- Using AOS makes the fade left effect for the DESCRIPTION -->
<div class="item" data-aos="fade-left">
  <div class="description">
    &nbsp  DESCRIPTION
  </div>

</br></br>
  <div class="essay">
   <p><div id="flip5">Highlights</div></p> 
   
<div id="panel5"> 
&#8883 The Chin Swee Caves Temple is a Taoist temple in Genting Highlands, Pahang, Malaysia. The Chin Swee Caves Temple is situated in the most scenic site of Genting Highlands.  </br>

&#8883 The Temple attracts many local and foreign devotees from Singapore, Taiwan, Indonesia, Thailand and China.</br>

&#8883 The Chin Swee Caves Temple is situated on a 28-acre plot of rocky forested land donated by Genting Group founder the late Tan Sri Dato’ Seri Lim Goh Tong.</br>

&#8883  Located 4,600 feet above sea level, the Temple is about 5–10 minutes’ drive down from the peak of the mountain.</br>


</div>


 <p><div id="flip6"> Inclusions</div></p> 

<div id="panel6">
&#8883 Guided tour of the famous Chin Swee Caves Temple</br>

&#8883 Free fees. </br>

&#8883 Roundtrip transportation to and from select Genting Highlands hotels.</br>

</div>





 <p><div id="flip8">Know Before You Book</div></p>


 <div id="panel8">
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>

&#8883You must be able to climb and descend stairs.</br>

&#8883People of all religion are welcomed.</br>
&#8883As this is a place of religion, visitors are expected to behave appropriately.</br>

&#8883Please be ready and waiting in your hotel lobby 15 minutes prior to your scheduled pick-up time.</br>
</div>
  
  </div>
</div>
  </div>
</div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <!-- Using AOS makes the fade down effect for the quote -->
    <div class="item" data-aos="fade-down">
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">“Go, fly, roam, travel, voyage, explore, journey, discover, adventure.”</span>
  </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
<div class="w3-card-4 w3-margin">
  <!-- Using AOS makes the fade right effect for the CASINO title -->
  <div class="item" data-aos="fade-right">
<p><div class="places"><center><b>CASINO</b></center> </div></p>
</div>
</br></br>

<!-- Using AOS makes the fade left effect for the contain -->
<div class="item" data-aos="fade-left">
<div class="slideshow-container3">

<div class="mySlides3 fade3">
  <div class="numbertext3">1 / 4</div>
  <img src="casino1.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">2 / 4</div>
  <img src="casino5.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">3 / 4</div>
  <img src="casino6.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">4 / 4</div>
  <img src="casino8.jpg" style="width:918px;height:500px">

</div>





<a class="prev3" onclick="plusSlides3(-1)">&#10094;</a>
<a class="next3" onclick="plusSlides3(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot3" onclick="currentSlide3(1)"></span> 
  <span class="dot3" onclick="currentSlide3(2)"></span> 
  <span class="dot3" onclick="currentSlide3(3)"></span> 
  <span class="dot3" onclick="currentSlide3(4)"></span>
</div>
</div>

</br></br></br>
<!-- Using AOS makes the fade right effect for the DESCRIPTION -->
<div class="item" data-aos="fade-right">
  <div class="description">
    &nbsp  DESCRIPTION
  </div>

</br></br>
  <div class="essay">
   <p><div id="flip9"> Highlights</div> </p> 

<div id="panel9">
&#8883The region's premier casino, Genting Casino, offers the latest electronic table games and slots machines as well as some of the best stakes gaming tables around with classic games such as Roulette, Pai Gow, Baccarat, Blackjack and many more. </br>

   
&#8883 Genting Casino is open every day of the year. Divided into a variety of themed sections, Genting Casino offers something for everyone, be it the lights and glitter of Hollywood or the excitement and luxury of elite gaming at Monte Carlo. </br>

&#8883 Opening alongside Resorts World Genting in 1971, Genting Casino offered thirty tables with games like Blackjack, Tai Sai, Roulette and French Boule, as well as a selection of “one-armed-bandits” – the characteristic lever-powered slot machines that we all know and love. 
</br>

</div>

 <p><div id="flip10"> Inclusions</div> </p> 

<div id="panel10">
&#8883 Complimentry snacks and drinks.</br>
&#8883 Roundtrip transportation to and from select Genting Highlands hotels.</br>

</div>



 <p><div id="flip12"> Know Before You Book</div></p>
 

 <div id="panel12">
 &#8883Visitors below the age of 21 are not allowed to enter. </br>

&#8883Muslim visitors are not allowed to enter due to religious restrictions.</br>

&#8883Cheating is strictly forbidden</br>


&#8883Please be ready and waiting in your hotel lobby 15 minutes prior to your scheduled pick-up time.</br>
</div>


  
  </div>
</div>
  </div>
</div>
</div>

<div class="bgimg-4">
  <div class="caption">
    <!-- Using AOS makes the fade up effect for the quote -->
     <div class="item" data-aos="fade-up">
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">  “Life is short and the world is wide”</span>
  </div>
</div>
</div>


<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
<div class="w3-card-4 w3-margin">
  <!-- Using AOS makes the fade left effect for the GENTING HIGHLANDS PREMIUM OUTLET title -->
  <div class="item" data-aos="fade-left">
<p><div class="places2"><center><b>GENTING HIGHLANDS PREMIUM OUTLET</b></center> </div></p>
</div>
</br></br>

<!-- Using AOS makes the fade right effect for the contain -->
<div class="item" data-aos="fade-right">
<div class="slideshow-container3">

<div class="mySlides4 fade4">
  <div class="numbertext4">1 / 3</div>
  <img src="gpo1.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides4 fade4">
  <div class="numbertext3">2 / 3</div>
  <img src="gpo2.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides4 fade4">
  <div class="numbertext4">3 / 3</div>
  <img src="gpo3.jpg" style="width:918px;height:500px">

</div>







<a class="prev4" onclick="plusSlides4(-1)">&#10094;</a>
<a class="next4" onclick="plusSlides4(1)">&#10095;</a>



</div>
<br>

<div style="text-align:center">
  <span class="dot4" onclick="currentSlide4(1)"></span> 
  <span class="dot4" onclick="currentSlide4(2)"></span> 
  <span class="dot4" onclick="currentSlide4(3)"></span> 
  <span class="dot4" onclick="currentSlide4(4)"></span>
</div>

</div>

</br></br></br>
<!-- Using AOS makes the fade left effect for the DESCRIPTION -->
<div class="item" data-aos="fade-left">
  <div class="description">
    &nbsp  DESCRIPTION
  </div>

</br></br>
  <div class="essay">
  <p><div id="flip13"> Highlights</div> </p> 

<div id="panel13">
&#8883 World class outlet store with over 150 brands to choose from. </br>

   
&#8883 Find impressive savings at Adidas, Aigner, Coach, Furla, 
Hugo Boss, Kate Spade New York, Michael Kors, Moschino, Polo Ralph Lauren, Superdry, Tumi and more. </br>

&#8883 Easily accessible by Awana Skyway, bus or car.</br>

&#8883 Get the most premium items at the lowest price.</br>

&#8883 An extraodinary shopping experience.</br>

</div>


 <p><div id="flip14"> Inclusions</div></p> 
<div id="panel14">
&#8883 Awana Skyway ride to and from Resorts World Genting Highlands</br>

&#8883 Roundtrip transportation to and from select Genting Highlands hotels.</br>
</div>

 <p><div id="flip15"> Optional</div></p>
<div id="panel15">
 &#8883 Meals and beverages.</br>
</div>


 <p><div id="flip16">Know Before You Book</div></p>
 <div id="panel16">

&#8883Please be ready and waiting in your hotel lobby 15 minutes prior to your scheduled pick-up time.</br>
</div>
  </div>
</div>
</div>
</div>
</div>


<!-- 1st places -->
<script>
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


<!-- 2nd place -->
<script>
var slideIndex = 1;
showSlides2(slideIndex);

function plusSlides2(n) {
  showSlides2(slideIndex += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex = n);
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("dot2");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active2";
}

</script>



<!-- 3rd place -->
<script>
var slideIndex = 1;
showSlides3(slideIndex);

function plusSlides3(n) {
  showSlides3(slideIndex += n);
}

function currentSlide3(n) {
  showSlides3(slideIndex = n);
}

function showSlides3(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("dot3");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active3", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active3";
}
</script>


<!-- 4th place -->
<script>
var slideIndex = 1;
showSlides4(slideIndex);

function plusSlides4(n) {
  showSlides4(slideIndex += n);
}

function currentSlide4(n) {
  showSlides4(slideIndex = n);
}

function showSlides4(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("dot4");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active4", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active4";
}
</script>

<script>

AOS.init({
  duration: 1500,
  
})
</script>
<hr>

 <?php 
    $type = "1";
  ?>



</br></br></br> </br></br></br> 
<div class="price">
RM 200.00 per pax
</div>
</br></br>
<div class="buynow">
  <a href="<?php echo("testing2.php?packageID="  .$type) ?>" class="button"><b>BOOK NOW</b></a>

</div>

</br></br></br>


</br></br></br> </br></br></br></br></br>   
<hr>


</br></br></br></br></br></br></br></br></br></br>



  </body>

	
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
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
<link href="./package1.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="buttonup.css">

		<title>KL tours | Historical Tour</title>

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
    <!-- Using AOS makes the fade down effect HISTORICAL TOUR main title -->
    <div class="item" data-aos="fade-down">
     <span class="border" style="background-color:transparent;font-size:68px;color:black;">HISTORICAL TOUR</span>
  </div>
</div>
</div>

<div style="position:relative;">
<div style="color: black; background-color:white;text-align:center;padding:150px 80px;text-align: justify">


  <div class="w3-card-4 w3-margin">
     <!-- Using AOS makes the fade right effect for the MEREDEKA SQUARE title -->
    <div class="item" data-aos="fade-right">

  <p><div class="places"><center><b>MERDEKA SQUARE</b></center> </div></p>
</div>

</br></br>
 <!-- Using AOS makes the fade left effect for the contain -->
<div class="item" data-aos="fade-left">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Merdeka1.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Merdeka3.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides fade">
  <div class="numbertext"> 3/ 3</div>
  <img src="Merdeka4.jpg" style="width:918px;height:500px">

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
 <!-- Using AOS makes the fade right effect for the DESCRIPTION  -->
   <div class="item" data-aos="fade-right">
  <div class="description">
  &nbsp  DESCRIPTION
  </div>

</br>
  <div class="essay">
   <p><div id="flip1"> Highlights</div> </p>
   
<div id="panel1">   

  &#8883Merdeka Square is undoubtedly KL’s best known landmark. Also called Dataran Merdeka, it is set in front of the Sultan Abdul Samad Building (the former State Secretariat). Directly in front is the Royal Selangor Club and to the north is St. Mary’s Church, one of Malaysia’s oldest Anglican churches. Within the colonial core of Kuala Lumpur, where the remnants of the British empire are especially evident. </br>
  
  &#8883 Merdeka Square seems to be nothing more than a giant field with perfectly manicured green lawns and a centrepiece of the tallest flagpole in the world (95m) proudly displaying the Jalur Gemilang (Malaysian flag). At the corner of Jalan Tuanku Abdul Rahman and Jalan Raja Laut, Merdeka Square is made up of a padang (field) that was once the Selangor Club cricket pitch.

  &#8883  It was here the Union Flag was lowered and the Malayan flag hoisted for the first time at midnight (time: 12:00 AM) on 31 August 1957. Since then, Merdeka Square has been the usual venue for the annual Merdeka Parade (National Day Parade).

</div>

 <p><div id="flip2"> Inclusions</div> </p> 

<div id="panel2"> 
&#8883 Guided tour of the square.</br>




</div>


 <p><div id="flip3"> Optional</div> </p>

<div id="panel3"> 
 &#8883 Snacks and beverages.</br>
</div>


 <p><div id="flip4"> Know Before You Book</div></p>

 <div id="panel4"> 
 &#8883Tour may be canceled due to weather conditions.</br>


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
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">“Work, Travel, Save, Repeat.”</span>
  </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
  </br>
<div class="w3-card-4 w3-margin">
   <!-- Using AOS makes the fade left effect for the NATIONAL MUSEUM title -->
<div class="item" data-aos="fade-left">
  <p><div class="places2"><center><b>NATIONAL MUSEUM</b></center> </div></p>
</div>
</br></br>


 <!-- Using AOS makes the fade right effect for the contain -->
<div class="item" data-aos="fade-right">
<div class="slideshow-container2">

<div class="mySlides2 fade2">
  <div class="numbertext2">1 / 3</div>
  <img src="MN1.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides2 fade2">
  <div class="numbertext2">2 / 3</div>
  <img src="MN2.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides2 fade2">
  <div class="numbertext2">3 / 3</div>
  <img src="MN3.jpg" style="width:918px;height:500px">

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
   <p><div id="flip5"> Highlights</div></p> 
   
<div id="panel5"> 
&#8883 The National Museum (Malay: Muzium Negara) is a museum located on Jalan Damansara in Kuala Lumpur, Malaysia.  </br>

&#8883 The museum is situated in close proximity to the Perdana Lake Gardens and it provides an overview of Malaysian history and culture. </br>

&#8883 The museum's design by architect Ho Kok Hoe was inspired by the architecture of the Malay royal palaces and vernacular Malay architecture. The design incorporated the need for exhibition and activity spaces. The large mosaic murals spanning the entrance depict the history and culture of the country. </br>

</div>


 <p><div id="flip6">  Inclusions</div></p> 

<div id="panel6">
&#8883 Guided tour of the museum by official musuem guide.</br>

&#8883 Admission fees. </br>

</div>





 <p><div id="flip8">Know Before You Book</div></p>


 <div id="panel8">
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>


&#8883No food and drinks are allowed in the museum.</br>


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
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">"Better to see something once than hear about it a thousand times."</span>
  </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
<div class="w3-card-4 w3-margin">
  <div class="item" data-aos="fade-right">
     <!-- Using AOS makes the fade right effect for the THE NATIONAL MONUMENT title -->
<p><div class="places"><center><b>THE NATIONAL MONUMENT</b></center> </div></p>
</div>
</br></br>
 <!-- Using AOS makes the fade left effect for the contain -->
<div class="item" data-aos="fade-left">
<div class="slideshow-container3">

<div class="mySlides3 fade3">
  <div class="numbertext3">1 / 4</div>
  <img src="TNM4.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">2 / 4</div>
  <img src="TNM2.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">3 / 4</div>
  <img src="TNM3.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides3 fade3">
  <div class="numbertext3">4 / 4</div>
  <img src="TNM1.jpg" style="width:918px;height:500px">

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
&#8883The National Monument is a sculpture that commemorates those who died in Malaysia's struggle for freedom, principally against the Japanese occupation during World War II and the Malayan Emergency, which lasted from 1948 until 1960. </br>

   
&#8883 It is located in the Federal capital, Kuala Lumpur. The Malaysian Houses of Parliament are situated near the monument. </br>

&#8883 It is the world's tallest bronze freestanding sculpture grouping.</br>

&#8883 Every year on 31 July on Warriors' Day, the Yang di-Pertuan Agong, the Prime Minister, heads of military, and the police pay their respects to the fallen heroes by laying garlands at the monument.</br>

</div>

 <p><div id="flip10"> Inclusions</div> </p> 

<div id="panel10">
&#8883 Detailed explaination by tour guide.</br>



</div>

 <p><div id="flip11"> Optional</div> </p>
<div id="panel11">
 &#8883 Snacks and beverages.</br>
</div>


 <p><div id="flip12"> Know Before You Book</div></p>
 

 <div id="panel12">
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>
&#8883 Tour may be canceled depending on weather conditions.</br>
  
</div>


  
  </div>
</div>
  </div>
</div>
</div>

<div class="bgimg-4">
  <div class="caption">

     <!-- Using AOS makes the fade up effect for the quote-->
     <div class="item" data-aos="fade-up">
    <span class="border" style="background-color:transparent;font-size:30px;color: white;"> “Live your life by a compass, not a clock.”</span>
  </div>
</div>
</div>


<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
<div class="w3-card-4 w3-margin">
   <!-- Using AOS makes the fade left effect for the THE ISLAMIC ARTS MUSUEM title -->
  <div class="item" data-aos="fade-left">
<p><div class="places2"><center><b>THE ISLAMIC ARTS MUSEUM</b></center> </div></p>
</div>
</br></br>

 <!-- Using AOS makes the fade right effect for the contain -->
<div class="item" data-aos="fade-right">
<div class="slideshow-container3">

<div class="mySlides4 fade4">
  <div class="numbertext4">1 / 4</div>
  <img src="IAM3.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides4 fade4">
  <div class="numbertext3">2 / 4</div>
  <img src="IAM2.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides4 fade4">
  <div class="numbertext4">3 / 4</div>
  <img src="IAM1.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides4 fade4">
  <div class="numbertext4">4 / 4</div>
  <img src="IAM6.jpg" style="width:918px;height:500px">
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
&#8883 Largest museum of Islamic arts in South East Asia with more than seven thousands artifacts from the Islamic world</br>

   
&#8883 Walking distance to the National Mosque, Bird Park and National Planetarium.</br>

&#8883 The Islamic Arts Museum has 12 main galleries which is classified according to the types of artefacts spread over level 3 and 4. </br>

&#8883 Located in the heart of Kuala Lumpur’s tourist belt amidst the lush greenery of Perdana Botanical Gardens </br>

</div>


 <p><div id="flip14"> Inclusions</div></p> 
<div id="panel14">
&#8883 Guided tour by musuem guide</br>

&#8883 Admission fees. </br>

</div>



 <p><div id="flip16">Know Before You Book</div></p>
 <div id="panel16">
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>


&#8883No food and drinks are allowed in the museum.</br>
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
RM 130.00 per pax
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
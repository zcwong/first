
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
<link href="./package3.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="buttonup.css">

		<title>KL Tours | Adventure Time </title>

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
    <!-- Using AOS makes the fade down effect for the ADVENTURE TIME main title -->
    <div class="item" data-aos="fade-down">
     <span class="border" style="background-color:transparent;font-size:68px;color:black;">ADVENTURE TIME</span>
  </div>
</div>
</div>

<div style="position:relative;">
<div style="color: black; background-color:white;text-align:center;padding:150px 80px;text-align: justify">


  <div class="w3-card-4 w3-margin">
    <!-- Using AOS makes the fade right effect for the BATU CAVES title -->
    <div class="item" data-aos="fade-right">

  <p><div class="places"><center><b>BATU CAVES</b></center> </div></p>
</div>

</br></br>
<!-- Using AOS makes the fade left effect for the contain -->
<div class="item" data-aos="fade-left">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="BATU1.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="BATU2.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides fade">
  <div class="numbertext"> 3/ 4</div>
  <img src="BATU3.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides fade">
  <div class="numbertext"> 4/ 4</div>
  <img src="BATU4.jpg" style="width:918px;height:500px">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 

</div>
</div>

</br></br></br>
<!-- Using AOS makes the fade right effect for the DESCRIPTION -->
   <div class="item" data-aos="fade-right">
  <div class="description">
  &nbsp  DESCRIPTION
  </div>

</br>
  <div class="essay">
   <p><div id="flip1"> Highlights</div> </p>
   
<div id="panel1">   

  &#8883Batu Caves is a limestone hill that has a series of caves and cave temples in Gombak, Selangor, Malaysia. It takes its name from the Sungai Batu (Stone River), which flows past the hill. It is the tenth (Pattu in Tamil) limestone hill from Ampang. Batu Caves is also the name of a nearby village.</br>

&#8883 The cave is one of the most popular Hindu shrines outside India, and is dedicated to Lord Murugan. It is the focal point of Hindu festival of Thaipusam in Malaysia. </br>

&#8883 Batu Caves in short also referred as 10th Caves or Hill for Lord Muruga as there are six important holy shrines in India and four more in Malaysia</br>

&#8883 The three others in Malaysia are Kallumalai Temple in Ipoh, Tanneermalai Temple in Penang and Sannasimalai Temple in Malacca.</br>

&#8883 Don't miss out on photo opportunities with the cheeky resident monkeys!</br>


</div>



 <p><div id="flip2"> Inclusions</div> </p> 

<div id="panel2"> 
&#8883 Guided tour of the Batu Caves by tour guide.</br>

&#8883 Admission fees. </br>

&#8883 Snacks for monkey feeding</br>
</div>


 <p><div id="flip3"> Optional</div> </p>

<div id="panel3"> 
 &#8883 Snacks and beverages.</br>
</div>


 <p><div id="flip4"> Know Before You Book</div></p>

 <div id="panel4"> 
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>

&#8883You must be able to climb and descend stairs.</br>

&#8883 Be aware of your belongings as monkeys are known to snatch away people's belongings!</br>
&#8883 Tour might be canceled depending on weather conditions.</br>
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
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">“Do more than just exist.”</span>
  </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
  </br>
<div class="w3-card-4 w3-margin">
  <!-- Using AOS makes the fade left effect for the TAMAN NEGARA title -->
<div class="item" data-aos="fade-left">
  <p><div class="places2"><center><b>TAMAN NEGARA</b></center> </div></p>
</div>
</br></br>

<!-- Using AOS makes the fade right effect for the contain -->
<div class="item" data-aos="fade-right">
<div class="slideshow-container2">

<div class="mySlides2 fade2">
  <div class="numbertext2">1 / 4</div>
  <img src="TN2.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides2 fade2">
  <div class="numbertext2">2 / 4</div>
  <img src="TN3.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides2 fade2">
  <div class="numbertext2">3 / 4</div>
  <img src="TN4.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides2 fade2">
  <div class="numbertext2">4 / 4</div>
  <img src="TN5.jpg" style="width:918px;height:500px">

</div>


<a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
<a class="next2" onclick="plusSlides2(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot2" onclick="currentSlide2(1)"></span> 
  <span class="dot2" onclick="currentSlide2(2)"></span> 
  <span class="dot2" onclick="currentSlide2(3)"></span> 
  <span class="dot2" onclick="currentSlide2(4)"></span> 
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
&#8883 Taman Negara is in Peninsular Malaysia. It was established in 1938/1939 as the King George V National Park. It was renamed to Taman Negara after independence, which means "national park" in Malay.  </br>

&#8883  Taman Negara has a total area of 4,343 km2 and has a reputation as the world's oldest deciduous rainforest, estimated to be more than 130 million years old</br>

&#8883 Visitors can enjoy the tropical rainforest, birdwatching or jungle trekking (e.g. Tenor Rentis) and the river views along the Tahan River.</br>

&#8883 Taman Negara is home to some rare mammals, such as the Malayan tiger, Malayan gaur (seladang) and Asian elephant. As well as birds such as the great argus, red junglefowl, and the rare Malayan peacock-pheasant are still found here in some numbers</br>


</div>


 <p><div id="flip6">  Inclusions</div></p> 

<div id="panel6">
&#8883 Bird watching and light jungle trekking. </br>


</div>



 <p><div id="flip7"> Optional</div> </p>

<div id="panel7">
 &#8883 Snakcs and beverages.</br>
</div>


 <p><div id="flip8">Know Before You Book</div></p>


 <div id="panel8">
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>

&#8883You must be able to climb and descend uneven terrain.</br>

&#8883At least 2 people are required for this activity to take place.</br>

&#8883 Sports attire is required.</br>
&#8883 Tour might be canceled depending on weather conditions.</br>
</div>
  
  </div>
</div>
  </div>
</div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <!-- Using AOS makes the fade down effect for the quote-->
    <div class="item" data-aos="fade-down">
    <span class="border" style="background-color:transparent;font-size:30px;color: white;">"Jobs fill your pockets, but adventures fill your soul."</span>
  </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:white;text-align:center;padding:150px 80px;text-align: justify;">
<div class="w3-card-4 w3-margin">
  <!-- Using AOS makes the fade right effect for the ZOO NEGARA title -->
  <div class="item" data-aos="fade-right">
<p><div class="places"><center><b>ZOO NEGARA</b></center> </div></p>
</div>
</br></br>
<!-- Using AOS makes the fade left effect for the contain -->
<div class="item" data-aos="fade-left">
<div class="slideshow-container3">

<div class="mySlides3 fade3">
  <div class="numbertext3">1 / 5</div>
  <img src="zoo1.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">2 / 5</div>
  <img src="zoo2.jpg" style="width:918px;height:500px">
 
</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">3 / 5</div>
  <img src="zoo3.jpg" style="width:918px;height:500px">

</div>


<div class="mySlides3 fade3">
  <div class="numbertext3">4 / 5</div>
  <img src="zoo4.jpg" style="width:918px;height:500px">

</div>

<div class="mySlides3 fade3">
  <div class="numbertext3">5 / 5</div>
  <img src="zoo5.jpg" style="width:918px;height:500px">

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
  <span class="dot3" onclick="currentSlide3(5)"></span>
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
&#8883Zoo Negara is home to 5137 animals of 459 different species. Over the years, the zoo has transformed itself to an open concept zoo with over 90% of its animals kept in spacious exhibits with landscape befitting its nature.</br>

   
&#8883 There are 16 exhibits in this zoo, including Reptile Park, Monkey/Lesser Apes, Malaysian Elephants and Bird Aviary.  </br>

&#8883 Sea lions, macaques and macaws are part of a Multi-Animal Show that is shown twice daily.</br>

&#8883 The Multi-Animal Photo Corner is located by the zoo's main entrance, and is opens on weekends. Visitors can have their pictures taken with snakes, miniature horses and birds.</br>

&#8883 The Mini Bee Museum is located at the heart of Zoo Negara and helps educate visitors about the many types of bees in the country.</br>

</div>

 <p><div id="flip10"> Inclusions</div> </p> 

<div id="panel10">

&#8883 Admission fees. </br>

</div>

 <p><div id="flip11"> Optional</div> </p>
<div id="panel11">
 &#8883 Snacks and beverages.</br>
</div>


 <p><div id="flip12"> Know Before You Book</div></p>
 

 <div id="panel12">
 &#8883Children 2 and younger are complimentary when accompanied by a paying adult.</br>


&#8883 While in the zoo, customers are expected to pay for thier own meal</br>


  
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
    $type = "3";
  ?>


</br></br></br> </br></br></br>
<div class="price">
RM 150.00 per pax
</div>
</br></br>
<div class="buynow">
  <a href="<?php echo("testing2.php?packageID=" .$type) ?>" class="button"><b>BOOK NOW</b></a>

</div>

</br></br></br>



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
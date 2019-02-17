<?php 
session_start()
?>
<!DOCTYPE html>
<html>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" type="text/css" href="buttonup.css">
<link rel="stylesheet" type="text/css" href="testing.css">

<head>



<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
<link href="#" type="text/css" rel="stylesheet">
    <title>KL tours | Edit Package</title>

</head>


    <div class="main-wrapper">
      <div class="nav-login">
        <?php
        $pID = $_GET['package'];
        ?>
  



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

<body>
<!-- top banner and navigation bar -->
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





</br></br></br></br></br></br></br></br></br></br></br>


 <div class="selectionform">
    EDIT PACKAGE
  </div>
</br>

<div class="body-content">
  <div class="module">
    <form class="form" action="<?php echo("edit2.php?package=".$pID) ?>" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="note">
    <p>
    </br>
  		*Fill in the info you want to edit and leave the others blank
  	</p>
  </div>
       </br>Quantity</br>
      <input type="number" min="1" max="10" name="quantity" /></br>

    
       </br> Date</br>
      <input type="date"  name="date" min= <?php echo date('d-m-Y'); ?>  max='31-12-2030' />
    </br>

        </br>Session</br></br>
      <input type="radio" name="session" value="9.00am"  > 9:00am
      <input type="radio" name="session" value="12.00pm">12:00pm</br>
      </br></br></br>


</br> Food Selection</br></br>
<div class="food1">
    <img src="food1.jpg" style="width:200px;height:200px"></br></br>
           Twisties<br>
           quantity:<br>
           (RM1.20 each)</br>
      <input type="number" min="1" max="10" name="meal1"></br>
    </div>

    <div class="food1">
      <img src="food2.jpg" style="width:200px;height:200px"></br></br>
           Chips<br>
           quantity:<br>
           (RM1.70 each)</br>
      <input type="number" min="1" max="10" name="meal2"></br>
    </div>

    <div class="food1">
      <img src="food3.jpg" style="width:200px;height:200px"></br></br>
           Cookies<br>
           quantity:<br>
           (RM2.20 each)</br>
      <input type="number" min="1" max="10" name="meal3" ></br>
    </div>

    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    <div class="food2">
      <img src="food4.jpg" style="width:200px;height:200px"></br></br>
          Soya<br>
           quantity:<br>
           (RM2.00 each)</br>
      <input type="number" min="1" max="10" name="meal4" ></br>
    </div>

<div class="food2">
      <img src="food5.jpg" style="width:200px;height:200px"></br></br>
      100Plus<br>
           quantity:<br>
           (RM2.50 each)</br>
      <input type="number" min="1" max="10" name="meal5"></br>
    </div>

<div class="food2">
      <img src="food6.jpg" style="width:200px;height:200px"></br></br>
    Mineral Water<br>
           quantity:<br>
           (RM1.80 each)</br>
      <input type="number" min="1" max="10" name="meal6" ></br>
</div>
    
      <button  type="submit" value="Confirm" name="register" style="cursor: pointer;">CONFIRM</button>
    </form>
  </div>
  <div class="cancel">
    <a onclick="goBack()">CANCEL</a>
  </div>
</div>

<!-- <script type="text/javascript">
    // document.getElementById("submit1").onclick = function () {
    //     window.location.href = "cart.php?packageID="+ "1";
    // };

    function direct() {
      window.location.href="cart.php?packageID="+ "1";
    }
</script> -->
<?php
if(!isset($_SESSION['username'])){ //if login in session is not set
  $_SESSION['notlogged']='1';

header("Location: login.php");
}
?>

</br></br></br></br></br></br></br></br></br></br>



<script>
function goBack() {
    window.history.back();
}
</script>

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

          


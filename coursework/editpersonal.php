<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="buttonup.css">
  <link rel="stylesheet" type="text/css" href="editpw.css">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <title>KL tours | Edit Personal Info</title>
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



<body>
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




</br> </br> </br> </br> </br> </br> </br> </br> </br> </br>




<body>


  <div class="pinfo">
  	Edit Personal Info
  </div>

</br></br>
 
<div class="body-content">
  <form method="post" action="editpersonal.php">
    <div class="note">
    *Fill in the info you want to update and leave the others blank</br></br>
  </div>
  	<?php include('error.php'); ?>

  </br>

    <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="number" name="phonenum" >
    </div>
    <div class="input-group">
  	  <label>Date of birth</label>
  	  <input type="date"  name="datebirth" min= <?php echo date('d-m-Y'); ?>  max='31-12-2030' />
  	</div>
    <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div>

  </br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="edit_info">CONFIRM</button>
  	</div></br></br>
        <div class="cancel">
     <a onclick="goBack()">CANCEL</a>
  </div>
  </form>
</div>
</body>


</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
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
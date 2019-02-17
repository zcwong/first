
<?php include('server.php') ?>
<!DOCTYPE html>


<html>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" type="text/css" href="buttonup.css">
<link rel="stylesheet" type="text/css" href="cart.css">



<head>



<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
<link href="#" type="text/css" rel="stylesheet">
    <title>KL tours | Cart</title>

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





</br> </br> </br> </br></br> </br> </br> </br>
 

<div class="cart">
    Cart
  <img src="https://cdn0.iconfinder.com/data/icons/shopping-set-4/512/18-512.png" 
       style="width:55px;height:55px;float:center ; position:relative ; bottom:9px; right:10px;"></a>
</div>

</br></br>  
<table style="width:100%">

<div class="note">
*Click the Package ID to EDIT/DELETE Package
</div>
</br></br>
    <tr>
        <th>PACKAGE ID</th>
        <th>TOUR</th>
        <th>DATE</th>
        <th>TIME</th>
        <th>Number of Person</th>
        <th>PRICE</th>
   </tr>

<?php
if(!isset($_SESSION['username']))
header("Location: login.php");
?>



<?php
$username1=$_SESSION['username'];
$servername = "localhost";
$username = "root";
$dbname = "loginsystem";



// Create connection
$conn = mysqli_connect($servername, $username,"", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT package.PackageID, package.type, package.date,package.time, package.Quantity, ROUND(((meals.food1p*meals.food1)+(meals.food2p*meals.food2)+(meals.food3p*meals.food3)+(meals.food4p*meals.food4)+(meals.food5p*meals.food5))+(meals.food6p*meals.food6)+(package.Price*package.Quantity),2) AS Price1, cart.Paid, package.id
FROM package INNER JOIN cart ON package.OrderID = cart.OrderID 
INNER JOIN meals ON package.PackageID = meals.PackageID
WHERE Paid='NO' AND package.id = (SELECT id FROM user WHERE username ='$username1')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $package1 = $row["PackageID"];

        echo "<tr><td>" ."<clickable><a href='detail.php?package=$package1'>".$package1."</a>". "</clickable>". "</td><td>" . $row["type"]. "</td><td>" .$row["date"]."</td><td>" .$row["time"]. "</td><td>" .$row["Quantity"]. "</td><td>" .$row["Price1"]. "</td></tr>"; 

    } 
    
} else {
    echo "";        
}

$sql = "SELECT ROUND(SUM(((meals.food1p*meals.food1)+(meals.food2p*meals.food2)+(meals.food3p*meals.food3)+(meals.food4p*meals.food4)+(meals.food5p*meals.food5))+(meals.food6p*meals.food6)+(package.Price*package.Quantity)),2) AS grandtotal
FROM package INNER JOIN cart ON package.OrderID = cart.OrderID 
INNER JOIN meals ON package.PackageID = meals.PackageID
WHERE Paid='NO' AND package.id = (SELECT id FROM user WHERE username ='$username1') ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td colspan='5'>"."<big>GRAND TOTAL</big>"."</td><td>"."<big>".$row["grandtotal"]."</big>"."</td></tr>";
        $grandtotal =$row['grandtotal'];
        $_SESSION["gtotal"]= $row['grandtotal'];
    }
    
    echo "</table>"; 
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</br></br></br></br>

<?php
if ($grandtotal!= 0){
    ?>
  <a href="payment.php" class="button"><b>CHECK OUT</b></a>
  <?php
}
?>




</br> </br> </br> </br></br> </br> </br> </br></br> </br> </br> </br></br> </br> </br> </br></br> </br> </br> </br></br> </br> </br> </br>
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
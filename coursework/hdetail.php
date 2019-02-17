<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" type="text/css" href="buttonup.css">
<link rel="stylesheet" type="text/css" href="detail.css">



<head>



<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
<link href="#" type="text/css" rel="stylesheet">
    <title>KL tours | History Package Details</title>

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




</br> </br> </br> </br>
</br> </br> </br> </br>

<div class="packagedetail">
  Package Detail
</div>
</br></br>


<?php
$servername = "localhost";
$username = "root";
$dbname = "loginsystem";
$package = $_GET["package"];


// Create connection
$conn = mysqli_connect($servername, $username,"", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT package.PackageID, package.type, package.date,package.time, package.Quantity, ROUND(((meals.food1p*meals.food1)+(meals.food2p*meals.food2)+(meals.food3p*meals.food3)+(meals.food4p*meals.food4)+(meals.food5p*meals.food5))+(meals.food6p*meals.food6)+(package.Price*package.Quantity),2) AS Price1, package.Price,cart.Paid, package.id
FROM package INNER JOIN cart ON package.OrderID = cart.OrderID 
INNER JOIN meals ON package.PackageID = meals.PackageID
WHERE package.PackageID = '$package'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $packageid= $row['PackageID'];
        $type= $row['type'];
        $date= $row['date'];
        $time= $row['time'];
        $quantity= $row['Quantity'];
        $price= $row['Price'];
        $price1= $row['Price1'];
        echo "<table>";

        echo "<tr>";
          echo "<th>PackageID</th>";
          echo "<td>$packageid</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<th>Tour</th>";
          echo "<td>$type</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<th>Date</th>";
          echo "<td>$date</td>";
        echo "</tr>";


        echo "<tr>";
          echo "<th>Time</th>";
          echo "<td>$time</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<th>Number of person</th>";
          echo "<td>$quantity</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<th>Price per pax</th>";
          echo "<td>$price</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<th>Total price</th>";
          echo "<td>$price1</td>";
        echo "</tr>";

        echo "</table></br></br></br>";
    } 
    
} 

$sql = "SELECT food1,food2,food3,food4,food5,food6 FROM meals WHERE PackageID = '$package'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $food1=$row['food1'];
    $food2=$row['food2'];
    $food3=$row['food3'];
    $food4=$row['food4'];
    $food5=$row['food5'];
    $food6=$row['food6'];

    echo "<div class='table2'>";
    echo "<table>";

      echo "<tr>";

       
        echo '<td><img src="food1.jpg" style="width:200px;height:200px"></br>Twisties<br>(RM1.20 each)<br>Amount: '.$food1.'</td>';
      


        echo '<td><img src="food2.jpg" style="width:200px;height:200px"></br>Chips<br>(RM1.70 each)<br>Amount: '.$food2.'</td>';
      
      
        echo '<td><img src="food3.jpg" style="width:200px;height:200px"></br>Cookies<br>(RM2.20 each)<br>Amount '.$food3.'</td>';
        

      echo "</tr>";
       
 

      echo "<tr>";

       
        echo '<td><img src="food4.jpg" style="width:200px;height:200px"></br>Soya<br>(RM2.00 each)<br>Amount: '.$food4.'</td>';
       


        echo '<td><img src="food5.jpg" style="width:200px;height:200px"></br>100 Plus<br>(RM2.50 each)<br>Amount: '.$food5.'</td>';
        

    
        echo '<td><img src="food6.jpg" style="width:200px;height:200px"></br>Mineral Water<br>(RM1.80 each)<br>Amount: '.$food6.'</td>';
        

      echo "</tr>";


    echo "</table>";
     
    echo "</div>" ;  
    }  
    
} 



mysqli_close($conn);
?>


<div class="back">
    <a href="history.php">BACK</a>
  </div>






</br></br>

<footer>
    <div id ="footer">
      <div class = "social" style="position: relative; bottom:30px;">

      <div class = "social">
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
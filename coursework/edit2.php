
<?php include('server.php') ?>

<?php

if(isset($_POST['register'])){


$servername = 'localhost';
$username = 'root';
$dbname = 'loginsystem';
    //all the input from form
  $conn = mysqli_connect($servername, $username,'', $dbname);
  $quantity =mysqli_real_escape_string($conn, $_POST['quantity']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);
  $time =mysqli_real_escape_string($conn,$_POST['session']);
  $meal1=mysqli_real_escape_string($conn,$_POST['meal1']);
  $meal2=mysqli_real_escape_string($conn,$_POST['meal2']);
  $meal3=mysqli_real_escape_string($conn,$_POST['meal3']);
  $meal4=mysqli_real_escape_string($conn,$_POST['meal4']);
  $meal5=mysqli_real_escape_string($conn,$_POST['meal5']);
  $meal6=mysqli_real_escape_string($conn,$_POST['meal6']);
  $userOrderID = $_SESSION['OrderID'];   
  $username1=$_SESSION['username'] ;
  $packaID = $_GET['package'];


  $user_check_query =  "SELECT id FROM user WHERE username ='$username1'";
  $result = mysqli_query($conn, $user_check_query);
  while($row = mysqli_fetch_assoc($result))
    {
      $id = $row["id"];
    }//if form is filled then change database to value changed
    if (!empty($quantity)) {
      $query = "UPDATE package SET Quantity = '$quantity' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($date)) {
      $query = "UPDATE package SET date = '$date' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($time)) {
      $query = "UPDATE package SET time = '$time' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($meal1)) {
      $query = "UPDATE meals SET food1 = '$meal1' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($meal2)) {
      $query = "UPDATE meals SET food2 = '$meal2' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($meal3)) {
      $query = "UPDATE meals SET food3 = '$meal3' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($meal4)) {
      $query = "UPDATE meals SET food4 = '$meal4' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($meal5)) {
      $query = "UPDATE meals SET food5 = '$meal5' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
    if (!empty($meal6)) {
      $query = "UPDATE meals SET food6 = '$meal6' WHERE PackageID='$packaID'";
      $results = mysqli_query($conn, $query);
      $_SESSION['editpackage']='1';
    }
     header('Location: detail.php?package='.$packaID);
 
  }
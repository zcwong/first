
<?php include('server.php') ?>


<?php
$servername = "localhost";
$username = "root";
$dbname = "loginsystem";
$package12 = $_GET["package"];

// Create connection
$conn = mysqli_connect($servername, $username,"", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM package WHERE PackageID='$package12'";
mysqli_query($conn, $sql);


header ('Location: cart.php');
?>
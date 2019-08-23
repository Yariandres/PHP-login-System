<!-- database handler -->
<?php 

// server name
$servername = "localhost";

$dBUsermane = "root";
$dBUPassword = "";
$dBName = "logginsystem";

$conn = mysqli_connect($servername, $dBUsermane, $dBUPassword, $dBName);

if(!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

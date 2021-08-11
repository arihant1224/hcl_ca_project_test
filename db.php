<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$dbname = "hcl_ca_db";

// Create connection
$conn = mysqli_connect($servername, $serverusername, $serverpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
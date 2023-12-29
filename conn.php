<?php
$servername = "127.0.0.1";
$username = "root";
$pass = "";
$dbname = "practic";

$connection = mysqli_connect($servername, $username, $pass, $dbname);
if (!$connection) {
  echo "Connected Unsuccessfully";
} 
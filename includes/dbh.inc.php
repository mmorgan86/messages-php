<?php

$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "delete";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pwd);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}
catch (PDOException $d) {
  echo "Connection Failed " .$e->getMessage();
}
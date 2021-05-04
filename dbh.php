<?php

$servername = "localhost";
$username = "root";
$passwort = "";
$dbname = "ajax";

$conn = mysqli_connect($servername, $username, $passwort, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
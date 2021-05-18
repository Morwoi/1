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



  // Function to insert Data

  if(isset($_GET['name']) && isset($_GET['nachname']))  {

    //JAVASCRIPT AUS DEM CODE LÖSCHEN 
    $name= $_GET['name'];
    $nachnahme= $_GET['nachname'];

    //SQL STATMENET 
    $sql_insert = 'INSERT INTO customer SET

                    name = "'.$Name.'",
                    nachname = "'.$Adresse.'",';

    //SQL EINFÜGEN
    $insert = mysqli_query($conn, $sql_insert);


  }

  ?>
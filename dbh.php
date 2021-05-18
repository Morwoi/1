<?php

$servername = "localhost";
$username = "root";
$passwort = "";
$dbname = "ajax";

$conn = mysqli_connect($servername, $username, $passwort, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  


  // Function to insert Data

  if(isset($_GET['name']) && isset($_GET['nachname']))  {

    //JAVASCRIPT AUS DEM CODE LÖSCHEN 
    $name= htmlspecialchars( $_GET['name']);
    $nachnahme= htmlspecialchars($_GET['nachname']);

    //SQL STATMENET 
    $sql_insert = 'INSERT INTO customer SET

                    Name = "'.$name.'",
                    Adresse = "'.$nachnahme.'"';


    //SQL EINFÜGEN
    $insert = mysqli_query($conn, $sql_insert);

    // SQL Statment SELECT

    $select ='SELECT * FROM customer';


    //SQL EINFÜGEN
    $insert = mysqli_query($conn, $select);
    
    while($data = mysqli_fetch_array($insert))
    {
      echo '<ul>';
      echo '<li>'.$data['Name'].', '.$data['Adresse'].'</li>';
      echo '</ul>';
    }
  }

  ?>
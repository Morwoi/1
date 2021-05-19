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

  if(isset($_GET['tbl_input_Nummer']) && isset($_GET['tbl_input_Name']))  {

    //JAVASCRIPT AUS DEM CODE LÖSCHEN 
    $nummer= htmlspecialchars( $_GET['tbl_input_Nummer']);
    $name= htmlspecialchars($_GET['tbl_input_Name']);
    $adresse= htmlspecialchars($_GET['tbl_input_Name']);
    $telefon= htmlspecialchars($_GET['tbl_input_Name']);
    $ort= htmlspecialchars($_GET['tbl_input_Name']);
    $plz= htmlspecialchars($_GET['tbl_input_Name']);
    $bemerkung= htmlspecialchars($_GET['tbl_input_Name']);
    $gebiet= htmlspecialchars($_GET['tbl_input_Name']);
  

    //SQL STATMENET 
    $sql_insert = 'INSERT INTO customer SET

                    Nummer = "'.$nummer.'",
                    Name = "'.$name.'",
                    Adresse = "'.$adresse.'",
                    Telefonnummer = "'.$telefon.'",
                    Ort = "'.$ort.'",
                    PLZ = "'.$plz.'",
                    Bemerkung = "'.$bemerkung.'",
                    Gebiet = "'.$gebiet.'"';

    //SQL EINFÜGEN
    $insert = mysqli_query($conn, $sql_insert);

    // SQL Statment SELECT

    /*
    $select ='SELECT * FROM customer';


    //SQL EINFÜGEN
    $insert = mysqli_query($conn, $select);
    
    while($data = mysqli_fetch_array($insert))
    {
      echo '<ul>';
      echo '<li>'.$data['Name'].', '.$data['Adresse'].'</li>';
      echo '</ul>';
    }
    */

   
  }
  else{
    "alert('Nummer und Name dürfen nicht leer sein')";
  }

  ?>
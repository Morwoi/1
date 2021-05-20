<?php

// Server Connection
$servername = "localhost";
$username = "root";
$passwort = "";
$dbname = "ajax";

$conn = mysqli_connect($servername, $username, $passwort, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  


  // Function to insert Data from TBL Header Input 

  if(isset($_GET['tbl_input_Nummer']) && isset($_GET['tbl_input_Name']))  {

    //JAVASCRIPT AUS DEM CODE LÖSCHEN 
    $nummer= htmlspecialchars( $_GET['tbl_input_Nummer']);
    $name= htmlspecialchars($_GET['tbl_input_Name']);
    $adresse= htmlspecialchars($_GET['tbl_input_Adresse']);
    $telefon= htmlspecialchars($_GET['tbl_input_Telefonnummer']);
    $ort= htmlspecialchars($_GET['tbl_input_Ort']);
    $plz= htmlspecialchars($_GET['tbl_input_PLZ']);
    $bemerkung= htmlspecialchars($_GET['tbl_input_Bemerkung']);
    $gebiet= htmlspecialchars($_GET['tbl_input_Gebiet']);
  
    
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
   
  }
 


  ?>
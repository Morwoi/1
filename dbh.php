<?php

include 'conn.php'; // MySQL Connection

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Variable for Region Filter
$gebietname = "Dornbirn";


  
// Function to insert Data from TBL Header Input 

  if(isset($_GET['input_Nummer']) && isset($_GET['input_Name']))  {
  
    //JAVASCRIPT AUS DEM CODE LÖSCHEN 
    $nummer= htmlspecialchars( $_GET['input_Nummer']);
    $name= htmlspecialchars($_GET['input_Name']);
    $adresse= htmlspecialchars($_GET['input_Adresse']);
    $telefon= htmlspecialchars($_GET['input_Telefonnummer']);
    $ort= htmlspecialchars($_GET['input_Ort']);
    $plz= htmlspecialchars($_GET['input_PLZ']);
    $bemerkung= htmlspecialchars($_GET['input_Bemerkung']);
    $gebiet= htmlspecialchars($_GET['input_Gebiet']);
    $farbe= htmlspecialchars($_GET['input_Farbe']);
    
  

    //SQL STATMENET 
    $sql_insert = 'INSERT INTO customer SET

                    Nummer = "'.$nummer.'",
                    Name = "'.$name.'",
                    Adresse = "'.$adresse.'",
                    Telefonnummer = "'.$telefon.'",
                    Ort = "'.$ort.'",
                    PLZ = "'.$plz.'",
                    Bemerkung = "'.$bemerkung.'",
                    Gebiet = "'.$gebiet.'",
                    Farbe = "'.$farbe.'"';

    //SQL EINFÜGEN
    $insert = mysqli_query($db, $sql_insert);
    

    // Changes the Link to Original to prevent multiple sending to SQL 
    header("location: Main.php");
  }
  
  //TO DO   
  //Creat Variable for Dornbirn  
  
  $sql = "SELECT * FROM customer";   
  $result = mysqli_query($db, $sql);

  ?>
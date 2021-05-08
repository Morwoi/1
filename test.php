<?php include 'dbh.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="Stylesheet" />
    <script src='Nav Click Funktion.js'></script>
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Lead Morwoi</title>

</head>
<body>
<!-- Start of Header -->
   
    <div class="topnav">
        <a class="active" href="#home" id="Nav_Home" onClick="nav_home_click();">Home</a>
        <a href="#Gelb" id="Nav_Gelb" onClick="nav_gelb_click();">Gelb</a>
        <a href="#Weiss"id="Nav_Weiss" onClick="nav_weiss_click();">Weiss</a>
        <a href="#Grün"id="Nav_Grün" onClick="nav_grün_click();" >Grün</a>
        <a href="#Blau"id="Nav_Blau" onClick="nav_blau_click();">Blau</a>
        <a href="#Violett"id="Nav_Violett" onClick="nav_violett_click();">Violett</a>
        <a href="#Rot"id="Nav_Rot" onClick="nav_rot_click();">Rot</a>
        <a href="#Orange"id="Nav_Orange" onClick="nav_orange_click();">Orange</a>
        <a href="#Rosa"id="Nav_Rosa" onClick="nav_rosa_click();">Rosa</a>
        <a href="#Türkis"id="Nav_Türkis" onClick="nav_türkis_click();">Türkis</a>
        <a href="#Löschen"id="Nav_löschen" >löschen</a>
        <a href="#Löschen"id="Nav_drucken">drucken</a>
      </div>

<!-- End of Header -->
<br>
<br>
<br>
<br>
<input><input>

<table class="tbl_customer">
       <thead>
            <th> Id </th>
            <th> Nummer </th>
            <th> Name </th>
            <th> Adresse </th>
            <th> Telefonnummer </th>
            <th> Ort </th>
            <th> PLZ </th>
            <th> Bemerkung </th>
            <th> Gebiet </th>

        </thead> 
        <tbody> <tr class="tbl_input_Heder"></tbody> 
        <td><Input class="tbl_input_Id"></Input></td>
        <td><Input class="tbl_input_Nummer"></Input></td>
        <td><Input class="tbl_input_Id"></Input></td>
        <td><Input class="tbl_input_Name"></Input></td>
        <td><Input class="tbl_input_Adresse"></Input></td>
        <td><Input class="tbl_input_Ort"></Input></td>
        <td><Input class="tbl_input_PLZ"></Input></td>
        <td><Input class="tbl_input_Bemerkung"></Input></td>
        <td><Input class="tbl_input_Gebiet"></Input></td>
        </tbody>

        <?php   // LOOP TILL END OF DATA 
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($conn, $sql);
            while($rows=$result->fetch_assoc())
        {
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $rows['Key'];?></td>
                        <td><?php echo $rows['Nummer'];?></td>
                        <td><?php echo $rows['Name'];?></td>
                        <td><?php echo $rows['Adresse'];?></td>
                        <td><?php echo $rows['Telefonnummer'];?></td>
                        <td><?php echo $rows['Ort'];?></td>
                        <td><?php echo $rows['PLZ'];?></td>
                        <td><?php echo $rows['Bemerkung'];?></td>
                        <td><?php echo $rows['Gebiet'];?></td>
                    </tr>
                    <?php
        }
                    ?>
                </tbody> 
    </table>




</body>
</html>
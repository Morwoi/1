<?php include 'dbh.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Style -->
    <link href="style.css" rel="Stylesheet" /> 
   


     <!-- Js Files -->
    <script src='Nav Click Funktion.js'></script>
    <script src='delet_from_Table.js'></script>
     <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  


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
        <a href="#Drucken"id="Nav_drucken">drucken</a>
        <a href="#Creat" id="Nav_Creat" onClick="nav_creat_click();">erstellen</a>
     </div>

<!-- End of Header -->


<!-- Start of Tabel  -->
<!-- Head  -->
<table class="tbl_customer">
       <thead>
       <tr class="filters">
            <th> Id </th>
            <th> Nummer </th>
            <th> Name </th>
            <th> Adresse </th>
            <th> Telefonnummer </th>
            <th> Ort </th>
            <th> PLZ </th>
            <th> Bemerkung </th>
            <th> Gebiet </th>
            <th> Farbe </th>   
        </tr>

        </thead> 
<!-- Tabel Input -->



<tbody>
<form id="tbl_input">
        <td><text name="input_Id" size="5"/></td>
        <td><Input id="input_Nummer_id" type="text" name="input_Nummer" size="5" placeholder="Nummer"/></td>
        <td><Input id="input_Name_id" type="text" name="input_Name" placeholder="Nummer"/></td>
        <td><Input type="text" name="input_Adresse" placeholder="Nummer"/></td>
        <td><Input type="number" name="input_Telefonnummer" placeholder="Nummer"/></td>
        <td><Input type="text" name="input_Ort" size="5" placeholder="Nummer"/></td>
        <td><Input type="number" name="input_PLZ" size="5" placeholder="Nummer"/></td>
        <td><Input type="tex" name="input_Bemerkung" placeholder="Nummer"/></td>
        <td><Input type="text" name="input_Gebiet"size="5" placeholder="Nummer"/></td>
        <td><Input type="text" name="input_Farbe"size="5" placeholder="Nummer"/></td>

        </form>

</tbody>
        
<!-- Tabel Input End -->
        


<!-- Logik for SQL DATA  -->

        <?php             
            while($rows=$result->fetch_assoc())
        {
        ?>
<!-- Fill Tabel--> 
                
                <tbody id="tbl_Body">
                    <tr>
                        <td id="tbl_key" ><?php echo $rows['Key'];?></td>
                        <td id="tbl_Nummer"><?php echo $rows['Nummer'];?></td>
                        <td id="tbl_Name"><?php echo $rows['Name'];?></td>
                        <td id="tbl_Adresse"><?php echo $rows['Adresse'];?></td>
                        <td id="tbl_Telefonnummer"><?php echo $rows['Telefonnummer'];?></td>
                        <td id="tbl_Ort"><?php echo $rows['Ort'];?></td>
                        <td id="tbl_PLZ"><?php echo $rows['PLZ'];?></td>
                        <td id="tbl_Bemerkung"><?php echo $rows['Bemerkung'];?></td>
                        <td id="tbl_Gebiet"><?php echo $rows['Gebiet'];?></td>
                        <td id="tbl_Farbe"><?php echo $rows['Farbe'];?></td>
                    </tr>
                    <?php
        }
                    ?>
                </tbody> 
    </table>

    <script>





// TODO:
// Select visiual for Table and remove selectet with Button       

$('tr').click(function() {
    $(this).find('td').toggleClass('phs-box-primary');
    document.getElementsByTagName("tr")[this].remove();

  
});

             
              </Script>
          
          
<!-- End of Tabel  -->
</body>
</html>
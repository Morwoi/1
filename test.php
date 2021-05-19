<?php include 'dbh.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="Stylesheet" />
    <script src='Nav Click Funktion.js'></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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


<!-- Start of Tabel  -->

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

        <tbody id="tbl_input"> 
        <td><Input class="tbl_input_Id" size="5"></Input></td>
        <td><Input class="tbl_input_Nummer" size="5"></Input></td>
        <td><Input class="tbl_input_Id"></Input></td>
        <td><Input class="tbl_input_Name"></Input></td>
        <td><Input class="tbl_input_Adresse"></Input></td>
        <td><Input class="tbl_input_Ort" size="5"></Input></td>
        <td><Input class="tbl_input_PLZ" size="5"></Input></td>
        <td><Input class="tbl_input_Bemerkung"></Input></td>
        <td><Input class="tbl_input_Gebiet"size="5"></Input></td>
        </tbody>

        
<!-- Logik for SQL DATA  -->

        <?php   // LOOPTILL END OF DATA 
            $sql = "SELECT * FROM Customer";
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

    <div class="ud_box">
        
        <form id="ud_form">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="nachname" placeholder="Nachname">
            <input type="submit" name="senden" id="senden">

        </form>
    
    </div>
    <div class="ud_box" id="ud_output"></div>


    <script>
    
    $('#ud_form').submit(function(event){
        event.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'dbh.php',
            data: $(this).serialize(),
            success: function(data){
                $('#ud_output').html(data);
            }
        });

        $('#ud_form')[0].reset();

    });
    
    </Script>

<!-- End of Tabel  -->

</body>
</html>
<?php include 'dbh.php'; ?>
<!-- TODO:

delet Button:
How do i do this?
-.-
updade Button (edit)

Filter sql with Buttons 
-->



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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     

  


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kustomer List 1</title>

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
            <th width="20%" class="text-center">View Employee Details</th>
            <th width="20%" class="text-center">Edit</th>

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


                        <td class="text-center"><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info edit_data" /></td>  
                        <td class="text-center"><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-success view_data" /></td>  

                    </tr>
                    <?php
        }
                    ?>
                </tbody> 
    </table>

<!-- Employee Details -->
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Employee Details</h4>  
              <button type="button" class="close" data-dismiss="modal">&times;</button>  
                 </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!-- /Employee Details -->
 <!-- PHP Ajax Update MySQL Data Through Bootstrap Modal -->
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                       <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                       <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Salary</label>  
                          <input type="text" name="salary" id="salary" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
<script>

 $(document).ready(function() {
    $('#add').click(function() {
        $('#insert').val("Insert");
        $('#insert_form')[0].reset();
    });
    $(document).on('click', '.edit_data', function() {
        var employee_id = $(this).attr("id");
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                employee_id: employee_id
            },
            dataType: "json",
            success: function(data) {
                $('#name').val(data.name);
                $('#address').val(data.address);
                $('#gender').val(data.gender);
                $('#designation').val(data.designation);
                $('#salary').val(data.salary);
                $('#employee_id').val(data.id);
                $('#insert').val("Update");
                $('#add_data_Modal').modal('show');
            }
        });
    });
    $('#insert_form').on("submit", function(event) {
        event.preventDefault();
        if ($('#name').val() == "") {
            alert("Employee Name Required");
        } else if ($('#address').val() == '') {
            alert("Employee Address Required");
        } else if ($('#designation').val() == '') {
            alert("Employee Designation Required");
        } else if ($('#salary').val() == '') {
            alert("Employee Salary Required");
        } else {
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: $('#insert_form').serialize(),
                beforeSend: function() {
                    $('#insert').val("Inserting");
                },
                success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#add_data_Modal').modal('hide');
                    $('#employee_table').html(data);
                }
            });
        }
    });
    $(document).on('click', '.view_data', function() {
        var employee_id = $(this).attr("id");
        if (employee_id != '') {
            $.ajax({
                url: "select.php",
                method: "POST",
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal('show');
                }
            });
        }
    });
});



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




$(document).ready(function(){
    $(".remove").click(function(){
        userID = $(this).attr('id');
         
         $.ajax({
                url: base_url+"/dbh.php?xAction=deleteUser&userID="+userID,
                cache: false,
                success:function(data){
                    if(data.trim() == "OK"){
                      $(this).closest('tr.tblrow').remove();
                    }
                }
            });
         
    });
});
  
/* Nav Click Funktion vor active head */
//#region
function nav_home_click(){
    $(Nav_Home).addClass('active');
    $(Nav_Home).siblings().removeClass('active');
}

function nav_gelb_click(){
    $(Nav_Gelb).addClass('active');
    $(Nav_Gelb).siblings().removeClass('active');

  
   
}

function nav_weiss_click(){
    $(Nav_Weiss).addClass('active');
    $(Nav_Weiss).siblings().removeClass('active');
}

function nav_grün_click(){
    $(Nav_Grün).addClass('active');
    $(Nav_Grün).siblings().removeClass('active');
}

function nav_blau_click(){
    $(Nav_Blau).addClass('active');
    $(Nav_Blau).siblings().removeClass('active');
}

function nav_violett_click(){
    $(Nav_Violett).addClass('active');
    $(Nav_Violett).siblings().removeClass('active');
}

function nav_rot_click(){
    $(Nav_Rot).addClass('active');
    $(Nav_Rot).siblings().removeClass('active');
}

function nav_orange_click(){
    $(Nav_Orange).addClass('active');
    $(Nav_Orange).siblings().removeClass('active');
}
function nav_rosa_click(){
    $(Nav_Rosa).addClass('active');
    $(Nav_Rosa).siblings().removeClass('active');
}
function nav_türkis_click(){
    $(Nav_Türkis).addClass('active');
    $(Nav_Türkis).siblings().removeClass('active');
}
function nav_creat_click(){
    $(Nav_Creat).addClass('active');
    $(Nav_Creat).siblings().removeClass('active');

    if($("#input_Nummer_id").val() == "")
    {
        alert("Number Field is missing");
        return false;
    }
    if($("#input_Name_id").val() == "")
    {
        alert("Name Field is missing");
        return false;
    }
    else {
      
       
     myFunction()
        

    }

}

// Submits Tbl_input
function myFunction() {
    document.getElementById("tbl_input").submit();
}

// Change SQL retriev to....
   





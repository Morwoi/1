  
function action(){
    var height=document.getElementById("togglee").style.height;

    height=height.replace("px","");
    height+=height;

    var n=height;
    height=n+1+'px';
    document.getElementById('togglee').style.height = height
}
  
  /*

  var hidden = false;
    function action() {
        hidden = !hidden;
        if(hidden) {
            document.getElementById('togglee').style.visibility = 'hidden';
        } else {
            document.getElementById('togglee').style.visibility = 'visible';
        }
    }

    */
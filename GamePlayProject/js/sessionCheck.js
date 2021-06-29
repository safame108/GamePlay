$(document).ready(function(){

          $.post("session.php", function(data){
              
             document.getElementById("user").herf = "logout.php";
             document.getElementById("user").innerHTML = "Logout";

          });
    
     
  });
$(document).ready(function(){
    $("form").submit(function(event){
          event.preventDefault();
          var formValues = $(this).serialize();
          $.post("signUp.php", formValues, function(data){
              alert(data);
              if(data == "True"){
                  alert("Account created.");         
                  window.location = "login_1.html";
              }
          });
    
        });
     
  });
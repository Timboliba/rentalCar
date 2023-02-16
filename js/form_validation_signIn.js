$(document).ready(function(){
   $("#sign_in").click(function(){
    var validate=true;
    var tab=Array("User Name","PassWord");
      if($("#0").val()==""){
        $("#username").text("Veuillez remplir le champ User Name");
        $("#username").css("color","red");
        validate=false;
      }
      else{
        $("#username").text("");
        validate=true;
      }
      if($("#1").val()==""){
        $("#password").text("Veuillez remplir le champ PassWord");
        $("#password").css("color","red");
        validate=false;
      }
      else{
        $("#password").text("");
        validate=true;
      }
      var param="username="+$("#0").val()+"password="+$("#1").val();
      $.post("validation_signIn.php",param);
      return validate;
   });

});
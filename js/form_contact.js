$(document).ready(function(){
    $("#submit").click(function(){
        var msg=Array("NOM","PRÉNOM","E-MAIL","MESSAGE");
        var validate=true;
        for(var i=0;i<msg.length;i++){
            if(($("#"+i).val()).trim()==""){
                alert("Veuiller saisir le champ "+msg[i]);
                validate=false;
                $("#"+i).val().focus();

            }
            else{
                validate=true;
            }
        }
    })
})
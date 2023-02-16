$(document).ready(function(){
    
    //Script pour afficher le formulaire d'inscription
    $(document).on('click','a[data-role=modifierprofile]',function(){
        $("#container").load("modification_profile.php",function(){
            validate=true;
    var msg=Array("FirstName","LastName","Username","Password","Address","E-mail","Phone Number","Passport Number /CIN");
    $("#btn_modif").click(function(){
        for(var i=0;i<msg.length;i++){
                if(($("#"+i).val()).trim()==""){
                    $("#err"+i).text("Veuillez remplir le champ "+msg[i]);
                    validate=false;
                }

                     //Validation du champ e-mail
             else if(i==5){
                var mail_reg=/^[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_.]{2,}(\.[a-zA-Z]+)+$/;
                var email=$("#5").val();
                if(!email.match(mail_reg)){
                 $("#err"+i).text("Entrez  un format d'adresse mail correcte:nom@nom_domaine.extension");
                    validate=false;
                }
                else{
                    $("#err"+i).text("");
                    validate=true;
                }
            }
            //Validation du champ telephone
            else if(i==6){
                ///^\+[0][0-9]{9}$/gi
                ///^\+[0-9]{1,3}[0-9]{7,}$/
                var telreg=/^\+[0-9]{1,3}[0-9]{7,}$/;
                ///^\+[0-9]{3}[0-9]{7,}$/gi;
                var tel=$("#6").val();
                if(!tel.match(telreg)){
                    $("#err"+i).text("Veuillez entrer le bon format de téléphone: +212.........");
                    validate=false;
                }
                else{
                    $("#err"+i).text("");
                    
                }

            }
            //Verification de la taille du mot de passe
            else if(i==3){
                if($("#3").val().length<4){
                    $("#err"+i).text("Veuillez entrer un mot de passe d'au moins quatre caractere!");
                    validate=false;
                }
                else{
                    $("#err"+i).text("");
                   
                }
            }
            //Verification de la taille du champ numéro de passeport ou cin
            else if(i==7){
                if($("#7").val().length<8){
                    $("#err"+i).text("Veuillez entrer un mot de passe d'au moins huits caracteres!");
                    validate=false;
                }
                else{
                    $("#err"+i).text("");
                   
                }
            }

                else{
                    $("#err"+i).text("");
                    validate=true;
                    
                }

                
        }
        var param="nom="+$("#0").val()+"&prenom="+$("#1").val()+"&username="+$("#2").val()+"&password="+$("#3").val()+"&adresse="+$("#4").val()+"&mail="+$("#5").val()+"&telephone="+$("#6").val()+"&passeportnum="+$("#7").val();
                if(validate){
                    $.post("confirm_modification_profile.php",param,function(arg){
                        $("#modifProfile").html(arg);
                    });
                }
    });
        });
        
     });

});
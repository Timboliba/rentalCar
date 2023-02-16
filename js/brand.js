
$(document).ready(function(){
    /*const myAnchor=document.getElementsByName("brand");
    myAnchor[0]*/
    $(document).on('change','input[name=voitures]',function() { 
        
        var param="marque="+$(this).attr('value');
        $.post("recherche.php",param,function(arg){
            $(".grid").html(arg);
            //alert(arg)
        });
    });

    //Script pour voir plus  de voiture
    $("a[data-role=afficherplus]").click(function(){
        var param="id="+$(this).attr('id');
        
        console.log(param);
       $.post("affichage_voiture.php",param,function(arg){
        $("#div").html(arg);

        //Effectuer une réservation
        $("#reserver").click(function(){
            if($("#search").val()!=""){
            $("#divdate").fadeIn(1000,function(){
                $("#confirmerreservation").click(function(){
                    //varvalidate=true;
                    var tableau=Array("Date de début","Date de fin");
                    for(var i=0;i<tableau.length;i++){
                        if($("#"+i).val()==""){
                            $("#err"+i).text("Veuillez choisir la "+tableau[i]);
                            validate=false;
                        }
                        else if($("#0").val()==$("#1").val()){
                            $("#err"+0).text("Veuillez choisir la "+tableau[0]+" differente de la "+tableau[1]);
                            $("#err"+1).text("Veuillez choisir la "+tableau[1]+" differente de la "+tableau[0]);
                            validate=false;
                        }
                       
                        else{
                            $("#err"+i).text("");
                            validate=true;
                            if(validate=true){
                                var param="datedebut="+$("#0").val()+"&datefin="+$("#1").val()+"&id_voiture="+$(".nom").attr("id");
                                $.post("confirm_reservation.php",param,function(arg){
                                    $("#div").html(arg);
        
                                });
                        }
                       
                    };
                    
                    }
                   
                });
            });
       }
    else{
        alert("Veuillez vous connecter pour effectuer cet action!!!")
    }});

        //Annuler une réservation
        $("#annuler").click(function(){
            $("#divdate").fadeOut(1000);
        });

       });
       
    })

    //Script pour poster un temoignage
    $(document).on('click','a[data-role=afficher]',function(){
        
    });


    
    
    
    //Script pour afficher le formulaire de connexion
    $(document).on('click','a[data-role=sign_in]',function(){
       $("#container").load("sign_in.php");
       
    });

    //Script pour afficher le formulaire d'inscription
    $(document).on('click','a[data-role=youhavenotacount]',function(){
        $("#container").load("sign_up.php");
        
     });
    
     //Script pour afficher le formulaire de connexion
    $(document).on('click','a[data-role=youhaveacount]',function(){
        $("#container").load("sign_in.php");
        
     });

      //Script pour afficher les reservations
    $(document).on('click','a[data-role=mesreservations]',function(){
        $("#div").load("reservation.php");
     });
     
     //Annuler reservation coté client
     $(document).on('click','a[data-role=supprimer_reservation_client]',function(){
        var param="id="+$(this).attr('id');
        if(confirm("Voulez vous annuler cette réservation?")==true){
            $.post("annuler_reservation.php",param,function(arg){
                $("#div").load("reservation.php");
                
            });
        }
       });

   

    
});
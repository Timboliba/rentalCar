
$(document).ready(function(){
    //Script pour charger le contenu de la page tableau de board l'orsque l'on clique sur le lien correspondant
    $("a[data-role=tableau_de_board]").click(function(){
       $(".col-md-8").load("tableau_de_bord.php");
    
    });

    //Script pour charger le contenu de la page marque  l'orsque l'on clique sur le lien correspondant
     $("a[data-role=marque]").click(function(){
        $(".col-md-8").load("marque.php");
    });

    //Script pour charger le contenu de la page marque  l'orsque l'on clique sur le lien correspondant
    $("a[data-role=vehicule]").click(function(){
        $(".col-md-8").load("vehicule.php");
    });
    //Test 
    $("div #item1",this).click(function(){
        alert($("span",this).text());
    });

    //Script pour charger le contenu de la page reservation  l'orsque l'on clique sur le lien correspondant
     $("a[data-role=requete]").click(function(){
        $(".col-md-8").load("reservation.php");
       
    });
    

    /*Script pour afficher les detaille de la réservation*/
    
    //Script  annuler une reservation coté administrateur
   $(document).on('click','a[data-role=supprimer_reservation]',function(){
    var param="id="+$(this).attr('id');
    if(confirm("Voulez vous annuler cette réservation?")==true){
        $.post("annuler_reservation.php",param,function(arg){
            $(".col-md-8").load("tableau_de_bord.php");
            
        });
    }
   });

   
   //Script pour afficher la voiture reserver par le client du coté administrateur
   $(document).on('click','a[data-role=approuver_reservation]',function(){
    var param="id="+$(this).attr('id');
  
        $.post("validation_de_la_reservation.php",param,function(arg){
            $(".col-md-8").html(arg);
            
        });
    
   });

   

    //Script pour charger le contenu de la page utilisateur  l'orsque l'on clique sur le lien correspondant
    $("a[data-role=utilisateur]").click(function(){
        $(".col-md-8").load("utilisateur.php");
    });

    //Script pour charger le contenu de la page utilisateur  l'orsque l'on clique sur le lien correspondant
    $("a[data-role=temoignage]").click(function(){
        $(".col-md-8").load("temoignage.php");
    });

    //Script pour charger le fichier "divHome.php" dans la '#div' 
    $("#div").load("divHome.php");
    
    
   
    

    //Script  pour supprimer un utilisateur
    $(document).on('click','a[data-role=supprimer_user]',function(){
        var parm="id="+$(this).attr('id');
        //confirm("Voulez vous supprimer l enregistrement?");
        if(confirm("Voulez vous supprimer cet utilisateur?")==true){
            $.post("supprimer_user.php",parm,function(arg){
                $(".col-md-8").load("tableau_de_bord.php");
                
            });
        }
        
    });

    //Script pour supprimer un témoignage
    $(document).on('click','a[data-role=supprimer_temoignage]',function(){
        var parm="id="+$(this).attr('id');
        //confirm("Voulez vous supprimer l enregistrement?");
        if(confirm("Voulez vous supprimer cet temoignage?")==true){
            $.post("supprimer_temoignage.php",parm,function(arg){
                $(".col-md-8").load("tableau_de_bord.php");
                
            });
        }
        
    });

    //Script  pour supprimer une voiture
    $(document).on('click','a[data-role=supprimer_voiture]',function(){
        var parm="id="+$(this).attr('id');
        //confirm("Voulez vous supprimer l enregistrement?");
        if(confirm("Voulez vous supprimer cet voiture?")==true){
            $.post("conf_suppression_voiture.php",parm,function(arg){
                $(".col-md-8").load("tableau_de_bord.php")
            });
        }
        
    });
     
    //Script pour afficher un utilisateur
    $(document).on('click','a[data-role=afficher_user]',function(){
        var parm="id="+$(this).attr('id');
     
           $.post("afficher_user.php",parm,function(arg){
                $(".col-md-8").html(arg);
            });
  
    });
    //Script pour afficher voiture
    $(document).on('click','a[data-role=afficher_voiture]',function(){
        var parm="id="+$(this).attr('id');
     
           $.post("affichage_admin_pannel.php",parm,function(arg){
                $(".col-md-8").html(arg);
            });
  
    });


    //supprimer_reservation
    
    

    //Script pour modifier les donner d'une voiture
    $(document).on('click','a[data-role=modifier_voiture]',function(){
        var param1="id="+$(this).attr('id');
        //confirm("Voulez vous supprimer l enregistrement?");
        
            $.post("modification_voiture.php",param1,function(arg){
                $(".col-md-8").html(arg);
                
                //Script pour la confirmation de la modification de la voiture
                $("#btncomfir").click(function(){
                    validate=true;
                    var tableau=Array("Immatriculation","Marque","Modéle","Kilométrage","Prix Location","Nombre en stock","Couleur","Date vignette","Date visite technique","Date assurance","Info");
                    for(var i=0;i<tableau.length;i++){
                        if($("#"+i).val()==""){
                            $("#err"+i).css("color","red");
                            $("#err"+i).text("Veuillez remplir le champ "+tableau[i]);
                            validate=false;
                        }
                       
                        else{
                            $("#err"+i).text("");
                            validate=true;
                        }
                    } 
                    if(validate=true){
                        var param=param1+"&immatriculation="+$("#0").val()+"&marque="+$("#1").val()+"&modele="+$("#2").val()+"&kilometrage="+$("#3").val()+"&prixlocation="+$("#4").val()+"&nombreenstock="+$("#5").val()+"&couleur="+$("#6").val()+"&datevignette="+$("#7").val()+"&datevisitetechnique="+$("#8").val()+"&dateassurance="+$("#9").val()+"&info="+$("#10").val()+"&photo="+$("#11").val();
                        $.post("confirm_modif_voiture.php",param,function(arg){
                            $(".col-md-8").load("tableau_de_bord.php")
                          if($("#search").val()==""){
                            alert("Veuillez vous connecté pour effectuer une réservation!");
                          }
                          else{
                            $("#divdate").fadeIn(1000);
                          }
                        })
                    }
                });
                
            });
        
    });

  
   


    //Script pour ajouter une nouvelle  voiture 
    $(document).on('click','a[data-role=addcar]',function(){
       $(".col-md-8").load("ajout_voiture.php",function(){
                 //Confirmation de l'ajout
       $("#btn_ajout").click(function(){
      
            var tableau=Array("Photo","Immatriculation","Marque","Modéle","Kilométrage","Prix Location","Nombre en stock","Couleur","Date vignette","Date visite technique","Date assurance","Info");
            for(var i=0;i<tableau.length;i++){
                if(($("#"+i).val()).trim()==""){
                    $("#err"+i).css("color","red");
                    $("#err"+i).text("Veuillez remplir le champ "+tableau[i]);
                    validate=false;
                }
              /* //Validation du champ immatriculation
               else if(i==1){
                    var regim=/^[A-Z]{2}[0-9]{4}[M][L]]$/;
                    var imm=$("#"+i).val();
                    if(!imm.match(regim)){
                        $("#err"+i).text("Veuillez remplir avec le bon format :BB-4444-ML");
                        validate=false; 
                    }
                    else{
                        $("#err"+i).text("");
                    validate=true;
                    }
               }
            */
               
                else{
                    $("#err"+i).text("");
                    validate=true;
                }
            }
            //Validation du champ photo
            if(($("#0").val()).trim()!=""){ 
                var file_name = $('#0')[0].files[0].name;
                var fileExtension = file_name.split('.').pop();
                var tabext=["jpg","png","pdf","jpeg","jfif"];
                if(tabext.indexOf(fileExtension) !== -1){
                       var file_size = $('#0')[0].files[0].size;
                       if(file_size>1000000)
                        {
                            $("#err0").text("fichier trop volumineux !!!");
                            validate=false;
                        }
                        else{
                            $("#err0").text("");
                        }
                       
                } else{
                           $("#err0").text("extension n'est pas autorisée !!!");
                        validate=false;
                }
             }
             var param="photo="+file_name+"&immatriculation="+$("#1").val()+"&marque="+$("#2").val()+"&modele="+$("#3").val()+"&kilometrage="+$("#4").val()+"&prixlocation="+$("#5").val()+"&nombreenstock="+$("#6").val()+"&couleur="+$("#7").val()+"&datevignette="+$("#8").val()+"&datevisitetechnique="+$("#9").val()+"&dateassurance="+$("#10").val()+"&info="+$("#11").val();
             //Vérification de la variable boolean validate
             if(validate==true){
                //Envoie des données vers le fichier de confirmation de l'ajout de la voiture
                $.post("confirm_ajout_voiture.php",param,function(arg){
                    $(".col-md-8").load("tableau_de_bord.php");
                });
             }
        });
       });
      
    });
});

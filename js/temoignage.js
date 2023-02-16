$(document).ready(function(){
  //Script pour effectuer un temoignage
  $("a[data-role=postertemoignage]").click(function(){
    $("#div").load("poster_temoignage.php",function(){
      $("button").click(function(){
        var param="commentaire="+$("textarea").val();
        $.post("confirm_temoignage.php",param,function(arg){
             $("#postetemoignagediv").html(arg);
        })
      });
    });
  });

  //Script pour afficher le profile
  $("a[data-role=afficherprofile]").click(function(){
   $("#container").load("profile.php");
   
  });
  
  //Script pour afficher mes temoignages
  $(document).on('click','a[data-role=mestemoignages]',function(){
    $("#div").load("temoignage.php");
  });

 
});
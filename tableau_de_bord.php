<link rel="stylesheet" href="css/grid.css">

<center>
    <h1>Tableau de bord</h1><hr>
    <?php
    require("inc_connexion.php");

    //Requete pour recuperer le nombre total d'utilisateur de l'application sauf l'administrateur
    //
    $req="select count(*) as id from user where role!='admin'";
    $rst=$idconnexion->query($req);
    $tab=$rst->fetch();
    $nombre_user=$tab[0];

    //Requete pour recuperer le nombre total de reservation  
    $req1="select count(*) as id from reservation";
    $rst1=$idconnexion->query($req1);
    $tab1=$rst1->fetch();
    $nombre_reservation=$tab1[0];

    //Requete pour recuperer le nombre total de voiture  
    $req2="select count(*) as id from voitures";
    $rst2=$idconnexion->query($req2);
    $tab2=$rst2->fetch();
    $nombre_voiture=$tab2[0];

     //Requete pour recuperer le nombre total de marque de voiture  
     $req3="select  count(DISTINCT(marque)) from voitures ";
     $rst3=$idconnexion->query($req3);
     $tab3=$rst3->fetch();
     $nombre_marque=$tab3[0];
    
     //Requete pour recuperer le nombre total de marque de voiture  
     $req4="select  count(DISTINCT(id)) from temoignage ";
     $rst4=$idconnexion->query($req4);
     $tab4=$rst4->fetch();
     $nombre_temoignage=$tab4[0];
    
    
    echo'<div class="grille">
        <div class="gride">
            <section style="height: 145px;background-image:url(images/utilisateur.jpg);background-size: contain;">
                
            </section>
            <div style="height: auto;background-color:grey;">NOMBRE D\'UTIILISATEUR : '. $nombre_user.'</div>
        </div>

        <div class="gride">
            <section style="background-image: url(images/brandjpg.jpg); background-size: cover;height: 145px;">
                
            </section>
            <div style="height: auto;background-color:grey;">MARQUE LISTER : '.$nombre_marque.'</div>
        </div>

        <div class="gride">
            <section style="background-image:url(images/voiture1.png);background-size: cover;height: 145px;">
                
            </section>
            <div style="height: auto;background-color:grey;">VOITURES LISTER : '.$nombre_voiture.'</div>
        </div>

        <div class="gride">
            <section style="background-image: url(images/reservation.png);background-size: cover ;height: 145px;">
                
            </section>
            <div style="height: auto;background-color:grey;">NOMBRE DE RESERVATIONS : '.$nombre_reservation.'</div>
        </div>
        <div class="gride">
            <section style="background-image: url(images/temoignage.jpg);background-size: cover;height: 145px;">
                
            </section>
            <div style="height: auto;background-color:grey;">NOMBRE DE TEMOIGNAGES : '.$nombre_temoignage.'</div>
        </div>
        <div class="gride">
            <section style="background-image:url(images/contact.png);background-size: contain;height: 145px;">
                
            </section>
            <div style="height: auto;background-color:grey;width: auto;">INFO CONTACT</div>
        </div>
        <div class="gride">
            <section style="background-image: url(images/page.png);background-size: contain;height: 145px;">
                
            </section>
            <div style="height: auto;background-color:grey;width: auto;">GÉRER PAGES</div>
        </div>

       
     </div>
     ';?>
</center>

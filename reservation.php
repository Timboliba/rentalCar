<?php session_start();?>
<div>
    <center>
       
       <?php
      
       require("inc_connexion.php");
        if(isset($_SESSION['open']) and $_SESSION['role']=="admin"){
          $req="select *from reservation";
        $rst=$idconnexion->query($req);
        $tab=$rst->fetchALL(PDO::FETCH_OBJ);
        echo' <h1>Listes Reservations</h1><hr>';
            echo"<table border='1' cellpadding='2' cellspacing='2' width='100%'>
             <tr bgcolor='#44c82F'>
                 <th>NOM</th>
                 <th>PRENOM</th>
                 <th>MARQUE</th>
                 <th>DATE DEBUT</th>
                 <th>DATE FIN</th>
                 <th>TELEPHONE</th>
                 <th>PASSEPORT/CIN</th>
                 <th>ACTIONS</th>
             </tr>";
            foreach($tab as $values =>$val){
                echo"<tr style='border:1px solid black'>";
                echo"<td>".$val->nom."</td>";
                echo"<td>".$val->prenom."</td>";
                echo"<td>".$val->marque."</td>";
                echo"<td>".$val->date_debut."</td>";
                echo"<td>".$val->date_fin."</td>";
                echo"<td>".$val->telephone."</td>";
                echo"<td>".$val->passeport_cin."</td>";
                echo"<td align='center'>
                <a href='#' id='".$val->id."' class='text-success' data-role='approuver_reservation' data-bs-toggle='modal' data-bs-target='#Modalafficher'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-calendar2-check-fill' viewBox='0 0 16 16'>
                    <path d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-2.6 5.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
                  </svg>
                </a>
                &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                <a href='#' id='".$val->id."' class='text-danger' data-role='supprimer_reservation'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                </td>";
               echo"</tr>";	
            }	
         echo"</table>";
        }
        else{
          echo' <h1>Mes Reservations</h1><hr>';
          $req="SELECT *FROM reservation WHERE id_user=".$_SESSION['id'];
        $rst=$idconnexion->query($req);
        $tab=$rst->fetchALL(PDO::FETCH_OBJ);
            echo"<table border='1' cellpadding='2' cellspacing='2' width='auto'>
             <tr bgcolor='#44c82F'>
                 <th>NOM</th>
                 <th>PRENOM</th>
                 <th>MARQUE</th>
                 <th>DATE DEBUT</th>
                 <th>DATE FIN</th>
                 <th>Prix Location</th>
                 <th>PASSEPORT/CIN</th>
                 <th>STATUT</th>
                 <th>ACTIONS</th>
             </tr>";
            foreach($tab as $values =>$val){
                echo"<tr align='center' style='border:1px solid black'>";
                echo"<td>".$val->nom."</td>";
                echo"<td>".$val->prenom."</td>";
                echo"<td>".$val->marque."</td>";
                echo"<td>".$val->date_debut."</td>";
                echo"<td>".$val->date_fin."</td>";
                echo"<td align='center'>".$val->prix_location."</td>";
                echo"<td>".$val->passeport_cin."</td>";
                echo"<td>".$val->statut."</td>";
                echo"<td>
                <a href='#' id='".$val->id."' class='text-success' data-role='approuver_reservation_client' data-bs-toggle='modal' data-bs-target='#Modalafficher'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
              </svg>
                </a>
                &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                <a href='#' id='".$val->id."' class='text-danger' data-role='supprimer_reservation_client'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                </td>";
               echo"</tr>";	
            }	
         echo"</table>";
        }
       ?>
    </center>
</div>

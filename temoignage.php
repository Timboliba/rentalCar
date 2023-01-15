<?php session_start();?>
<div>
  <center>
  
        <?php
            if(isset($_SESSION['open']) and $_SESSION['role']=="admin"){
          //Script permet de recuperer un enregistrement via la table etudiants de la BD bdetudiants
          require("inc_connexion.php");
	        $req="SELECT * FROM temoignage";
	        $rst=$idconnexion->query($req);
	        $tabtemoignage=$rst->fetchALL(PDO::FETCH_OBJ); 
          echo'
          <h1>Listes des Temoignages</h1><hr>
          <table border="1" cellpadding="2" cellspacing="2" width="100%">
              <tr bgcolor="#44c82F">
                  <th>ID</th>
                  <th>User ID</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Commentaire</th>
                  <th>Date temoignage</th>
                  <th>Heure temoignage</th>
                  <th>Action</th>
              </tr>
          ';
          foreach ($tabtemoignage as $key => $enrg) {
            echo"<tr>";
            echo"<td>".$enrg->id."</td>";
            echo"<td>".$enrg->id_user."</td>";
            echo"<td>".$enrg->nom."</td>";
            echo"<td>".$enrg->prenom."</td>";
            echo"<td>".$enrg->temoignage."</td>";
            echo"<td>".$enrg->date_poste."</td>";
            echo"<td>".$enrg->heure_poste."</td>";
            echo"<td align='center'>
            <a href='#' id='".$enrg->id."' class='text-danger' data-role='supprimer_temoignage'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
              </svg>
            </a>
                </td>";
            echo"</tr>";		
	        }
          echo'</table>';
}
else{
     //Script permet de recuperer un enregistrement via la table etudiants de la BD bdetudiants
     require("inc_connexion.php");
     $req="SELECT * FROM temoignage where id_user=".$_SESSION['id'];
     $rst=$idconnexion->query($req);
     $tabtemoignage=$rst->fetchALL(PDO::FETCH_OBJ); 
     echo'
          <h1>Mes Temoignages</h1><hr>
          <table border="1" cellpadding="2" cellspacing="2" width="auto" >
              <tr bgcolor="#44c82D">
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Commentaire</th>
                  <th>Date temoignage</th>
                  <th>Heure temoignage</th>
                  <th>Action</th>
              </tr>
          ';
     foreach ($tabtemoignage as $key => $enrg) {
       echo"<tr>";
       echo"<td>".$enrg->nom."</td>";
       echo"<td>".$enrg->prenom."</td>";
       echo"<td>".$enrg->temoignage."</td>";
       echo"<td>".$enrg->date_poste."</td>";
       echo"<td>".$enrg->heure_poste."</td>";
       echo"<td>
       <a href='#' id='".$enrg->id."' class='text-danger' data-role='supprimer_temoignage'>
         <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
           <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
         </svg>
       </a>
           </td>";
       echo"</tr>";		
     }
     echo'</table>';
}
?>
  </center>
</div>
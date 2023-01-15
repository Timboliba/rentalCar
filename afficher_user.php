<style>
  td{
    border:1px solid black;
  }
  /*Utilisateur Connecter*/
</style>
<link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<div>
  <center>
  <?php
          require("inc_connexion.php");
	        $req="select * from user where id=".$_POST["id"];
	        $rst=$idconnexion->query($req);
	        $tabclient=$rst->fetch(PDO::FETCH_OBJ); 
    echo'<h1> Utilisateur : ';echo $tabclient->nom." ".$tabclient->prenom;echo'</h1><hr>';
        
      
          echo"
          <table border='1' cellpadding='5' cellspacing='5' width='100%'>
          <tr bgcolor='#44c89F'>
              <td>Last Name</td>
              <td>First Name</td>
              <td>Address</td>
              <td>Passport/cin</td>
              <td>Phone Number</td>
              <td align='center'>Action</td>
          </tr>
          ";
 
            echo"<tr>";
                echo"<td>".$tabclient->nom."</td>";
                echo"<td>".$tabclient->prenom."</td>";
               // echo"<td>".$tabclient->mail."</td>";
                echo"<td>".$tabclient->adresse."</td>";
                echo"<td>".$tabclient->passport_cin."</td>";
                echo"<td>".$tabclient->telephone."</td>";
                echo"<td align='center'>
                <a href='#' id='".$tabclient->id."' class='text-success' data-role='afficher_user' data-bs-toggle='modal' data-bs-target='#Modalafficher'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
              </svg>
                </a>
                &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                <a href='#' id='".$tabclient->id."' class='text-danger' data-role='supprimer_user'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                </td>";
            echo"</tr>";	
       
?>
    </table>
  </center>
</div>

<?php session_start();?>
<?php
    if($_POST["username"]!="" && $_POST["password"]!=""){
        require("inc_connexion.php");
        $req="SELECT * FROM user WHERE username='".$_POST['username']."' && password='".$_POST['password']."'";
        $rst=$idconnexion->query($req);
        $tab=$rst->fetch(PDO::FETCH_OBJ);
    
       $nombre=$rst->rowcount();

        if($nombre>0)
        {
            $_SESSION["open"]="ok";
            $_SESSION["id"]=$tab->id;
            $_SESSION["nom"]=$tab->nom;
            $_SESSION["prenom"]=$tab->prenom;
            $_SESSION["role"]=$tab->role;
            //teste pour admin
           if(isset($_SESSION['role']) && $_SESSION['role']=="client"){
            header("location:index1.php");
           }
           else{
            header("location:admin_pannel.php");
           }
        }
        else{ 
           header("location:sign_in.php");
        }

    }
?>
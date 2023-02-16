<?php session_start();
require("inc_connexion.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mainContent.css">
    <link rel="stylesheet" href="css/footer1.css">
 
</head>
<body style="margin:0px;padding:0px;width:100%;">
    <div id="content" style=">
        <!--------------------------------------Header--------------------------------------------------->
        <div id="headerContent" style="border:1px double black;justify-content:center;align-items:center;position:relative;">
            <?php include_once("header.php");?>
            <?php include_once("navbar.php");?>
        </div>
        <!--------------------------------------Main---------------------------------------------------->
        <div id="container" height="auto">
            
            <!--?php include_once("main_content.html");?-->

            <?php
        //verifie que la page selectionner n'est pas vide et vas affecter la page dans  une variable p
            if(isset($_GET["page"])){
                $p=$_GET["page"];
            }
        //Si la page est vide il affecte la valeur page d'accueil a la variable p
            else{
                $p="main_content";
            }
        //veirifie que la variable p.".php." existe si elle existe il vas inclure le fichier dans le mainWrapper	 
            if(file_exists($p.".html")){
                include($p.".html");
            }
        //sinon si le fichier n'existe pas il vas nous rediriger vers la page 404.html qui est une page d'erreur
            else{
                include("404.html");
            }
	 
	 
	        ?>

        </div>
        <!--------------------------------------Footer--------------------------------------------------->
        <div id="footerContent" style="height:auto" class="">
            <?php include_once("footer1.php");?>
        </div>
    </div>
   <script src="js/jQuery_v3.6.0_min.js"></script>
   <script src="js/admin_pannel.js"></script>
   <script src="js/brand.js"></script>
   <script src="js/temoignage.js"></script>
   <script src="js/footer.js"></script>
   <script src="js/form_contact.js"></script>
   <script src="js/modifprofile.js"></script>
   <script src="js/form_validation_signIn.js"></script>
   <script src="js/form_validation_signUp.js"></script>
</body>
</html>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("inc_connexion.php");
        if($_SESSION["open"]=="ok")
        {
            include("rental1.php");
        }
        else{
            header("location:accueil.php");
        }
    ?>
</body>
</html>
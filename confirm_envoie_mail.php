<?php session_start();?>
<?php 
    if(isset($_SESSION['open'])){
        if( $_POST["nom"]!="" && $_POST['prenom']!="" && $_POST['message']!="" )
    {
        //mail($_POST['txtmail'],$_POST['txtobj'],$_POST['txtmail'],$header);
        $to=$_POST['message'];
        $expediteur=$_SESSION["nom"];//expediteur
        $obj="";
        $message="Bonjour\n\n";
        $message.=$_POST['message'];
        $message.="Vivement\r\n";

        $header="From : ".$expediteur."\r\n";
        $header.="Content-Type : text/plan; charset='iso-8859-1'";//ou utf-8

        $send=mail($to,$obj,$message,$header);
        if(!$send)
        {
            echo "Message n'est pas envoyé!";
            header("location:index1.php");
        }
        else{
            echo "Message envoyé avec succès";
        }
    }
    }
    else{
        echo "Veuillez vous connecter!!!";
    }
   /* echo "NOM : ".$_POST["nom"]."<br>";
    echo "PRÉNOM : ".$_POST["prenom"]."<br>";
    echo "E-mail : ".$_POST["email"]."<br>";
    echo "Message : ".$_POST["message"]."<br>";*/
    ?>
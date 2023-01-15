<?php session_start();?>
<?php
    if($_SESSION["open"]!="ok"){
        header("location:index1.php");
    }
    else{
       
        echo'
       
    <div id="postetemoignagediv" style="height:inherit; padding-top:40px;width:inherit;width:inherit;margin:0px;" align="center">
    <h1 align="center">Temoignage</h1>
    <hr>
            <div>
                <textarea name="temoignage" cols="40" rows="10"  maxlength="250" id="textarea"></textarea> <apan id="erreur"></span>
            </div>
            <div>
                <button id="'.$_SESSION['id'].'">POSTER</button>
            </div>
    </div>
        ';
    }
?>

<script src="js/jQuery_v3.6.0_min.js"></script>
<script src="js/temoignage.js"></script>
<!--page pour effectuer un temoignage-->


<link rel="stylesheet" href="css/bar_de_navigation.css">
<div id="nav_bar">
    <button id="button">MENU</button>
    <div id=""><a href="?page=main_content" >ACCUEIL</a></div>
    <div id=""><a href="?page=aPropos" data-role="apropos" id="apropos">A PROPOS DE NOUS</a></div>
    <!--div id=""><a href="#">LISTES DE VOITURES</a></div-->
    <div id=""><a href="#">FAQ</a></div>
    <div id="contact"><a href="?page=contact1">NOUS CONTACTER</a></div>
    <div id="ul">
        <a href="#" style="width:200px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </a>
        <?php
            if(isset($_SESSION["open"]) and $_SESSION["role"]!="admin"){
                echo'
                <ul>
                <li><a data-role="afficherprofile">PROFIL</a></li>
                <li><a href="#">MODIFIER MOT DE PASSE</a></li>
                <li><a data-role="mesreservations">MES RÉSÉRVATIONS</a></li>
                <li><a data-role="postertemoignage">POSTER UN TEMOIGNAGE</a></li>
                <li><a data-role="mestemoignages">MES TEMOIGNAGE</a></li>
            </ul>
                ';
            }
            else{
                echo'
                <ul>
                <span>Veuillez vous connecter !</span>
            </ul>
                ';
            }
        ?>
    </div>
    <?php
    if(isset($_SESSION["open"])){
        echo'<span id="">';
        echo'<input type="text" name="" id="search" readOnly value="'.$_SESSION["nom"].' '.$_SESSION["prenom"].'">';
        echo'</span>';
    }
    else{
        echo'<span id="">';
        echo'<input type="text" name="" id="search" readOnly value="">';
        echo'</span>';
    
    }
    
    ?>

</div>


<script src="js/jQuery_v3.6.0_min.js"></script>

<script>
    $.noConflict();
  jQuery(document).ready(function(){
    $("#button").click(function(){
        $("#nav_bar div").fadeToggle();
        

    })
    $("#btn").click(function(){
       // $("#nav_bar >div").fadeToggle(2000);
       alert($("#btn").text());

    })
    $("#btnsrch").click(function(){
        alert($("#ul ul").html());

    })
    $("#ul").click(function(){
        $("#ul ul").css({"margin-left":"-2px","margin-top":"0.5px","width":"auto"}).slideToggle(1050);
    })
})
</script>

<?php session_start();?>
<link rel="stylesheet" href="css/divHome.css">
<link rel="stylesheet" href="css/boostrap.min.css">
    <div class="row"  id="conteneur" style="height:inherit;width:inherit;">
        <div class="col-md-3" style="background-color:silver;">
            <div>
                <input type="search" name="" id="Rechercher" placeholder="SEARCH"><button id="recherche">Search</button>
            </div>
            <hr>
            <h1>Brand</h1>
            <hr>
            <div id="marque">
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="BMW">&nbsp;BMW
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="MERCEDES" idvoiture="MERCEDES BENZ">&nbsp;MERCEDES BENZ
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="RANGEROVER" idvoiture="RANGE ROVER">&nbsp;RANGE ROVER
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="VOLVO" idvoiture="VOLVO">&nbsp;VOLVO
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="FERRARI" idvoiture="FERRARI">&nbsp;FERRARI
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="ALPHAROMEO" idvoiture="ALPHA ROMEO">&nbsp;ALPHA  ROMEO
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="AUDI" idvoiture="AUDI">&nbsp;AUDI
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="FORD" idvoiture="FORD">&nbsp;FORD
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="GMC" idvoiture="GMC">&nbsp;GMC
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="TOYOTA" idvoiture="TOYOTA">&nbsp;TOYOTA
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="HONDA" idvoiture="HONDA">&nbsp;HONDA
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="VOLSKWAGEN" idvoiture="VOLSKWAGEN">&nbsp;VOLSKWAGEN
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="PEUGEOT" idvoiture="PEUGEOT">&nbsp;PEUGEOT
                </div>
                <div class="col-md-12">
                    &nbsp;<input type="radio" name="voitures" value="HYUNDAI" idvoiture="HYUNDAI">&nbsp;HYUNDAI
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row" id="row" style="height:750px;">
                <div class="grid">
                   <?php
                    require("inc_connexion.php");
                   
                        $req="SELECT *FROM voitures LIMIT 9 ";
                        $rst=$idconnexion->query($req);
                        $tabvoiture=$rst->fetchALL(PDO::FETCH_OBJ);
                       foreach($tabvoiture as $value=>$val){
                        echo' 
                        <div class="divGride">
                            <section style="background-image:url(images/'.$val->marque.'/'.$val->photo.');">
                                
                            </section>
                            <div style="height:auto;backgroun-color:silver;">'.$val->marque.' <span> <a  data-role="afficherplus" id="'.$val->id.'" style="color:blue;">plus</a></span></div>
                        </div>';
                    }    
                   ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jQuery_v3.6.0_min.js"></script>
    <script src="js/brand.js"></script>
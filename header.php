
<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container-fluid" style="background-color:silver;">
    <div class="row">
        <div class="col-md-12">
            <center>
                <div class="row">
                    <div class="col-md-3">LOGO</div>
                    <div class="col-md-3">Pour le support:<br>hamaditimboliba54@gmail.com</div>
                    <div class="col-md-3">Service d'assitance téléphonique:<br>+212693623991</div>
                    <div class="col-md-3">
                       
                            <?php
                            if(isset($_SESSION["open"])){
                                echo'<button id="logOut" name="logOut"><a href="log_out.php"  style="text-decoration: none;color:black;">SE DECONNECTER</a></button>';
                            }
                            else{
                                echo'
                                <button id="authentification"><a data-role="sign_in" style="text-decoration: none;">IDENTIFIER/ENREGISTRER</a></button>
                                ';
                            }
                            ?>
                        
                    </div>
                       
                </div>
            </center>
        </div>
    </div>
</div>

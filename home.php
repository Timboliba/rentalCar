
<?php
require("inc_connexion.php");
?>
<style>
    tr td{
        margin-left:45px;
    }
</style>
<div style="margin-top:50px;">
    <center>
        <table border="1" celspacing="10" colpadding="10" width=100%>
            <tr style="background-color:teal"><td>NAME</td><td>PIC</td><td>INFO</td></tr>
        <?php
            $req="SELECT *FROM cars LIMIT 4";
            $rst=$idconnexion->query($req);
            $tableau=$rst->fetchALL(PDO::FETCH_OBJ);
                foreach ($tableau as $keys => $values) {
                    echo"<tr>";
                    echo"<td>".$values->carName."</td>";
                    echo"<td><img src='".$values->pic."' style='width:110px;'></td>";
                    echo"<td>".$values->info."</td>";
                   // echo"<td>".$values->stock."</td>"; 
                    echo"</tr>"; 
                }
        ?>
        </table>
    </center>
</div>

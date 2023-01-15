<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <table border="1" celspacing="10" colpadding="10" width=100%>
            <tr style="background-color:teal"><td>NAME</td><td>PIC</td><td>INFO</td><td>STOCK</td></tr>
    <?php
    require("inc_connexion.php");
    $req="SELECT *FROM cars WHERE carName like'".$_POST["recherche"]."%'";
    $rst=$idconnexion->query($req);
    $tab=$rst->fetchALL(PDO::FETCH_OBJ);

    foreach ($tab as $keys => $values) {
            echo"<tr>";
            echo"<td>".$values->carName."</td>";
            echo"<td><img src='".$values->pic."' style='width:110px;'></td>";
            echo"<td>".$values->info."</td>";
            echo"<td>".$values->stock."</td>"; 
            echo"</tr>"; 
    }
    ?>
    </table>
    </center>
</body>
</html>
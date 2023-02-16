<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="projet_content">
       <!----------------------The header of projet----------------------->
        <div class="header">
            <?php include("header.php");?>
        </div>
        <!----------------------The main of projet----------------------->
        <div class="main" style="height:700px;">
           <section> <?php include("col-left.html");?></section>
           <div class="section_principal" style="background-color:white;width:inherit;"><?php include("home.php");?></div>
        </div>
        <!----------------------The footer of projet----------------------->
        <!--div class="footer">
            <?php //include_once("footer.html");?>
        </div-->
   </div>
</body>
</html>
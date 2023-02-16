<?php
	 //verifie que la page selectionner n'est pas vide et vas affecter la page dans une une variable p
		 if(isset($_GET["page"])){
			 $p=$_GET["page"];
		 }
	//Si la page est vide il affecte la valeur page d'accueil a la variable p
		 else{
			 $p="accueil";
		 }
	//veirifie que la variable p.".php." existe si elle existe il vas inclure le fichier dans le mainWrapper	 
		 if(file_exists($p.".php")){
			 include($p.".php");
		 }
	//sinon si le fichier n'existe pas il vas nous rediriger vers la page 404.html qui est une page d'erreur
		 else{
			 include("404.html");
		 }
	 ?>
	 <?php
if(isset($_GET["btrecherche"]))
{
	if($_GET["recherche"]!="")
	{
		header("searsh.php");
	}

}
?>
<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");
	$Num_P=$_GET['a'];
	if(count($errors) == 0){
	$req="DELETE FROM `conducteur` WHERE `conducteur`.`id_conducteur` = '$Num_P'";
	$res=mysqli_query($conn,$req);
		header('location: form2_liste_conducteurs.php');
	
	}

?>
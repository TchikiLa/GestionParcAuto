<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");

	$vec = $_POST['vehicule1'];
	$nomsc = $_POST['nomscoc'];
	$journ = $_POST['ddd1'];
	$moisn = $_POST['mmm1'];
	$annen = $_POST['yyyyy1'];
	$datdeb=$annen.'-'.$moisn.'-'.$journ;
	$journ1 = $_POST['ddd2'];
	$moisn1 = $_POST['mmm2'];
	$annen1 = $_POST['yyyyy2'];
	$datfin=$annen1.'-'.$moisn1.'-'.$journ1;
	
	
	if(count($errors) == 0){
	$req="INSERT INTO `assurance` (`id_ass`, `id_vehicule`, `nom_sc`, `date_deb`, `date_fin`) VALUES (NULL, '$vec', '$nomsc', '$datdeb', '$datfin');";
	$res=mysqli_query($conn,$req);
	if(mysqli_num_rows($res) != 1){
		echo "insertion success welcom";
		header('location: form4_liste_véhicule.php');
	}else{
		echo "Erreur d'insertion";
		header('location: form3_ajouter_vehicule.php');
	}
	}

?>
<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");

	$imm = $_POST['immatriculation'];
	$marque = $_POST['marque'];
	$modele = $_POST['modele'];
	$nbrplace = $_POST['nbrplace'];
	$puissance = $_POST['puissance'];
	$numchassis = $_POST['numchassis'];
	$categorie = $_POST['categorie'];
	$journ = $_POST['dd'];
	$moisn = $_POST['mm'];
	$annen = $_POST['yyyy'];
	$datcir=$annen.'-'.$moisn.'-'.$journ;
	$couleur = $_POST['couleur'];
	$kilometrage = $_POST['kilometrage'];
	
	
	if(count($errors) == 0){
	$req="INSERT INTO `vehicule` (`id_vehicule`, `immat`, `marque`, `modele`, `nbrplace`, `puiss`, `numchass`, `categorie`, `datecirculation`, `couleur`, `kilometrage`) VALUES (NULL, '$imm', '$marque', '$modele', '$nbrplace', '$puissance', '$numchassis', '$categorie', '$datcir', '$couleur', '$kilometrage');";
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
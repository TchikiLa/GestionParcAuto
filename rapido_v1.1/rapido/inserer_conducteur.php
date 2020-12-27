<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$adress = $_POST['adress'];
	$journ = $_POST['dd'];
	$moisn = $_POST['mm'];
	$annen = $_POST['yyyy'];
	$daten=$annen.'-'.$moisn.'-'.$journ;
	$genre = $_POST['genre'];
	$num = $_POST['numpermis'];
	$anne = $_POST['yyyy2'];
	
	
	if(count($errors) == 0){
	$req="INSERT INTO `conducteur` (`id_conducteur`, `nom`, `prenom`, `email`, `adresse`, `date-naiss`, `genre`, `num`, `annee_obtention`) VALUES (NULL, '$nom', '$prenom', '$email', '$adress', '$daten', '$genre', '$num', '$anne');";
	$res=mysqli_query($conn,$req);
	if(mysqli_num_rows($res) != 1){
		echo "insertion success welcom";
		header('location: form2_liste_conducteurs.php');
	}else{
		echo "Erreur d'insertion";
		header('location: form1_ajouter_conducteur.html');
	}
	}

?>
<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");

	
	$nomvc = $_POST['vehicule2'];
	$journ = $_POST['dddd3'];
	$moisn = $_POST['mmmm3'];
	$annen = $_POST['yyyyyy3'];
	$datdeb=$annen.'-'.$moisn.'-'.$journ;
	$journ1 = $_POST['dddd4'];
	$moisn1 = $_POST['mmmm4'];
	$annen1 = $_POST['yyyyyy4'];
	$datfin=$annen1.'-'.$moisn1.'-'.$journ1;
	
	
	if(count($errors) == 0){
	$req="INSERT INTO `controletec` (`id_ctr`, `id_vehicule`, `date_deb`, `date_fin`) VALUES (NULL, '$nomvc', '$datdeb', '$datfin');";
	$res=mysqli_query($conn,$req);
	if(mysqli_num_rows($res) != 1){
		echo "insertion success welcom";
		header('location: form4_liste_véhicule.php');
	}else{
		echo "Erreur d'insertion";
		header('location: form3_ajouter_vehicule.php');
	}
	}

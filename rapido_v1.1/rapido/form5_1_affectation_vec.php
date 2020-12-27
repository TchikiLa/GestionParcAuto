<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");

	$nom = $_POST['nom'];
	$journ = $_POST['dd'];
	$moisn = $_POST['mm'];
	$annen = $_POST['yyyy'];
	$datdeb=$annen.'-'.$moisn.'-'.$journ;
	$num = $_POST['vehicule'];
	$action = $_POST['action'];
	
	if(count($errors) == 0){
		if($action == "Affecter"){
			$reqq="INSERT INTO `conduit` (`id_conducteur`,`id_vehicule`,`date_deb`) VALUES ('$nom', '$num', '$datdeb')";
			$ress=mysqli_query($conn,$reqq);
			header('location: form5_affectation_vec.php');
		}else{
			$reqq2="DELETE FROM `conduit` WHERE `conduit`.`id_conducteur` = '$nom' AND `conduit`.`id_vehicule` = '$num';";
			$ress2=mysqli_query($conn,$reqq2);
			header('location: form5_affectation_vec.php');
		}
	
	}
	

?>
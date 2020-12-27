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
	$req="UPDATE `assurance` SET `nom_sc` = '$nomsc', `date_deb` = '$datdeb', `date_fin` = '$datfin' WHERE `assurance`.`id_vehicule` = $vec;";
	
	$res=mysqli_query($conn,$req);
	
		header('location: form4_liste_véhicule.php');
	
	}

?>
<?php
include 'conf.php';
$errors = array();
/*lien to bd*/  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Erreur : Acces a la base de donnees est impossible");
/*selection de la base de donnee*/mysqli_select_db($conn,$dbname) or die("Erreur : Nom de base de donnees incorrect");

	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if(count($errors) == 0){
	$req="SELECT * FROM utilisateur WHERE username='$user' AND password='$pass'";
	$res=mysqli_query($conn,$req);
	if(mysqli_num_rows($res) == 1){
		echo "login succes welcom";
		header('location: page1.html');
	}else{
		header('location: GPA.html');
	}
	}

?>
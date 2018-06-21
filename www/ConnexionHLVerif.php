<?php 	session_start();
		include('Include_Index/Connexion_Base.php'); ?>
<?php
	$email = mb_strtolower($_POST['email']);
	$mdp = $_POST['mdp'];

	$result = $Base->query("SELECT COUNT(*) as Num FROM MEMBRE WHERE email = '".htmlentities(stripslashes($email),ENT_QUOTES,'UTF-8' )."'");
	$donnees = $result->fetch();
	$rows = $donnees['Num'];
	if($rows==0)
		header('Location: ConnexionHLErreur.php');
	else{
			$result = $Base->query("SELECT ID_Profil, email, mdp, admin, nom, prenom FROM MEMBRE WHERE email = '".$email."'");
			$Afficher = $result->fetch();
			if(count($Afficher)>0) { 
			$VraiMdp = $Afficher['mdp'];
			$Admin = $Afficher['admin'];
			$Nom = $Afficher['nom'];
			$Prenom = $Afficher['prenom'];
			$ID = $Afficher['ID_Profil'];
			}
			
			if($mdp == $VraiMdp)
			{
				$_SESSION['ID'] = $ID;
				$_SESSION['Admin'] = $Admin;
				$_SESSION['Nom'] = $Nom;
				$_SESSION['Prenom'] = $Prenom;
				$_SESSION['CurrentEmail'] = $email;
				
				header('Location: IndexOL.php');

			}
			else
				header('Location: ConnexionHLErreur.php');
	}
?>
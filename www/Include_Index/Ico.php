    
	<?php
		include('Include_Index/Connexion_Base.php');
		$Requete = "select Logo, Icone from LOGO;";
		$Resultat = $Base->query($Requete); $Afficher = $Resultat->fetch();
		if(count($Afficher)>0) { $Icone = $Afficher['Icone']; $Logo = $Afficher['Logo']; }
	?>
	<link rel="shortcut icon" href="images/Logo_Icone/<?php echo $Icone ?>">
	
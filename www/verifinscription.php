<?php 
session_start();
	if(isset($_POST['button'])){
		$Nom=$_POST['Nom'];
		$Prenom=htmlspecialchars($_POST['Prenom'],ENT_QUOTES);
		$Sexe=htmlspecialchars($_POST['sexe'],ENT_QUOTES);
		$MailPerso=htmlspecialchars($_POST['MailPerso'],ENT_QUOTES);
		$MailPro=htmlspecialchars($_POST['mailPro'],ENT_QUOTES);
		$AdressePerso=htmlspecialchars($_POST['adressePerso'],ENT_QUOTES);
		$VillePerso=htmlspecialchars($_POST['villePerso'],ENT_QUOTES);
		$CodePostal=htmlspecialchars($_POST['codePostal'],ENT_QUOTES);
		$NomDiplome=htmlspecialchars($_POST['nomDiplome'],ENT_QUOTES);
		
		$Cotisation=htmlspecialchars($_POST['ChoixDiplome'],ENT_QUOTES);
		if ($Nom!=""){
			if($Prenom!=""){
				if($Sexe!=""){
					if($MailPerso!=""){
						if($AdressePerso!=""){
							if($VillePerso!=""){
								if($CodePostal!=""){
									if($Cotisation!=""){
										//entrez dans la table en attente de toute les données de la demande d'adhésion.
										//envoi d'un mail a un administrateur ou d'une notification sur l'application ou la page de gestion pour les admins pour confirmation.
										//Suite a la confirmation ou refus, on envoi un mail d'activation de compte avec identifiant et mot de passe avec transfert des données dans une table inscrit.
										$_SESSION['cotisation']=$Cotisation;
										header('Location:inscriptionFin.php');
										
									}
									else
									{
										header('Location:inscriptionErreur.php');
									}
								}
								else
								{
									header('Location:inscriptionErreur.php');
								}
							}
							else
							{
								header('Location:inscriptionErreur.php');
							}
						}
						else
						{
							header('Location:inscriptionErreur.php');
						}
					}
					else
					{
						header('Location:inscriptionErreur.php');
					}
				}
				else
				{
					header('Location:inscriptionErreur.php');
				}
			}
			else
			{
				header('Location:inscriptionErreur.php');
			}
		}
		else
		{
			header('Location:inscriptionErreur.php');
		}
		exit();
	}
?>

<?php include('headerOL.php');
include('Include_Index/Connexion_Base.php');  ?>
<?php date_default_timezone_set('UTC'); ?>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

<html lang="en">
    <section id="contact" >
				<div class="container">
					<div class="row">
						<?php
							$ID = $_GET['page'];
							$Requete = "SELECT Nom, Admin, Prenom, PhotoProfil, Sexe, DateNaissance, DateInscription, PDF, MessageHumeur from MEMBRE WHERE ID_Profil = '".$ID."'";
							$Resultat = $Base->query($Requete);
							
							while($Donnees = $Resultat->fetch()) { 
							
							$Nom = $Donnees['Nom'];
							$Prenom = $Donnees['Prenom'];
							$Admin = $Donnees['Admin'];
							$Sexe = $Donnees['Sexe'];
							$Photo = $Donnees['PhotoProfil'];
							$DateNaissance = $Donnees['DateNaissance'];
							$Date=new DateTime($Donnees['DateInscription']);
							$DateInscription = $Date->format('d/m/Y');
							$PDF = $Donnees['PDF'];
							$MessageHumeur = $Donnees['MessageHumeur'];
							$Age = round(date("Y-m-d") - $DateNaissance); 
							}
							
					$Requete = $Base->query("SELECT * FROM OBTENTIONDIPLOME WHERE ID_Profil = '".$ID."'");
					$NombreDiplome = $Requete->rowCount();
							
							
						?>
					<br><br>
					
					<center><h4><?php if($Admin == 1){ echo "Cet utilisateur poss&egrave;de un compte administrateur"; } ?></h4></center>
					<div id=InfoPersoProfil>
					
						<div id=TexteProfil>
						
						<img id=PhotoProfil src="images/Profil/<?php echo $Photo ?>" width="150" height="150"/>
						<br>
							<div id=NomPrenomProfil>
							<b>Nom :</b> <?php echo $Nom ?>
							<br><b>Pr&eacute;nom :</b> <?php echo $Prenom ?>
							<br><b>Age :</b> <?php if($DateNaissance != null){ echo $Age." ans"; }
													else{ echo "Non renseign&eacute;"; } ?>
							<br><?php if($Sexe == "Femme"){ ?><b>Inscrite le :</b> <?php echo $DateInscription; }
									else{ ?><b>Inscrit le :</b> <?php echo $DateInscription; } ?>
							<br><br><?php if($PDF != ""){ ?><a target="_blank" href="pdf/Profil/<?php echo $PDF ?>">Voir le PDF</a> <?php ; }
										else{ echo "Pas de PDF disponible"; } ?>

							</div>
						</div>

					
						<div id=MessageHumeur>
						<h4><b>Message d'humeur :</b></h4>
						<p><?php if($MessageHumeur != "") {echo $MessageHumeur;}
								else{ echo "Cet utilisateur n'a pas de message d'humeur."; }?></p>
								
								<br><br>
						
						<h4><b>Dipl&ocirc;mes :</b></h4>
						<?php
							
							$Requete = $Base->query("SELECT * FROM OBTENTIONDIPLOME WHERE ID_Profil = '".$ID."'");
							$Resultat = $Requete->rowCount();
							
							if($Resultat == 0) { echo "Cet utilisateur ne poss&egrave;de pas de dipl&ocirc;mes"; }
							else{
								
							$Requete = "SELECT Nom_Diplome, Annee_Obtention FROM DIPLOME, OBTENTIONDIPLOME WHERE OBTENTIONDIPLOME.ID_Profil = '".$ID."' AND OBTENTIONDIPLOME.ID_Diplome = DIPLOME.ID_Diplome";
							   $Resultat = $Base->query($Requete);
							   while($Donnees = $Resultat->fetch()) 
							   { ?>
								<?php echo $Donnees['Nom_Diplome']." / ".$Donnees['Annee_Obtention'] ?> <br> 
							   <?php }
								
							}
							
						?>
						</div>

					
					</div>
					<a id=LienModifProfil href="ContacterUtilisateur.php?id=<?php echo $ID ?>">
						<div id=ModifierProfil style = "background-color: #DEA023;">
						<br>
						<center>
						<b><font color=black>CONTACTER</font></b>
						</center>
						</div>
					</a>
					
					
					</div>
				</div>          
    </section>

    <?php include('footerOL.php'); ?>  
   
</body>
</html>

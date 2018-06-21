<?php include('headerOL.php');
include('Include_Index/Connexion_Base.php');  ?>
<?php date_default_timezone_set('UTC'); ?>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

<html lang="en">
    <section id="contact" >
				<div class="container">
					<div class="row">
						<?php
							$ID = $_SESSION['ID'];
							$Requete = "SELECT PhotoProfil, Sexe, DateNaissance, DateInscription, PDF, MessageHumeur from MEMBRE WHERE ID_Profil = '".$ID."'";
							$Resultat = $Base->query($Requete);
							
							while($Donnees = $Resultat->fetch()) { 
							
							$Nom = $_SESSION['Nom'];
							$Prenom = $_SESSION['Prenom'];
							$Admin = $_SESSION['Admin'];
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
					
					<center><h4><?php if($Admin == 1){ echo "Vous poss&eacute;dez un compte administrateur"; } ?></h4></center>
					<div id=InfoPersoProfil>
					<form action="Include_Profil/Script_Profil.php" method="post" enctype="multipart/form-data">
						<div id=TexteProfil>
							<div id=NomPrenomProfilModif style="height:140">

							<div class="input-field"><input type="text" name="Nom" class="form-control" required="required" placeholder="Nom" value=<?php echo $Nom ?>></div>
							<div class="input-field"><input type="text" name="Prenom" class="form-control" required="required" placeholder="Prenom" value=<?php echo $Prenom ?>></div>
							<div class="input-field"><input type="date" name="Ddn" class="form-control" placeholder="Date de Naissance" value=<?php echo $DateNaissance ?>></div>
							<i>(Votre date de naissance)</i><br>
							<br><br>
							
							
							
							<br><br>
							</div>
							
							
						</div>

					
						<div id=MessageHumeur>
						<h4><b>Message d'humeur :</b></h4>
						<textarea type="text" name="Message" cols="60" class="form-control" maxlength="100"><?php echo $MessageHumeur ?></textarea>
								<br>
						</div>
						<br><br><br><br><br><br><br>
							<div id=PdPModif>
							<h4><b>Photo de profil :</b><br></h4>
							<input type="file" name="PdP" placeholder="Sélectionnez le fichier">
							</div>
							
							<div id=PDFModif>
							<h4><b>PDF de pr&eacute;sentation :</b><br></h4>
							<input type="file" name="PDF" placeholder="Sélectionnez le fichier">
							</div>
						

					</div>
					
					
					<button type="submit" id=ValiderProfil>
						<center>
						<b><font color=black>VALIDER</font></b>
						</center>
					</button>
					
					</form>
					</div>
				</div>          
    </section>

    <?php include('footerOL.php'); ?>  
   
</body>
</html>

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
							
							
						?>
					<br><br>
					
					<div id=InfoPersoProfil style="height:200px;">
					<form action="Include_Profil/Script_Diplome.php" method="post" enctype="multipart/form-data">
						<div id=TexteProfil style="width:300px; margin-left:260px;">
						<CENTER><h4><b>AJOUTER UN DIPLOME</b></h4></CENTER><br>
							
							<select name="ListeDiplomes" style="width:300px;">
							   <option value="0">S&eacute;lectionner un dipl&ocirc;me</option>
							   
							   <?php $Requete = "SELECT ID_Diplome, Nom_Diplome FROM DIPLOME";
							   $Resultat = $Base->query($Requete);
							   while($Donnees = $Resultat->fetch()) 
							   { ?>
								<option value="<?php echo $Donnees['ID_Diplome'] ?>"><?php echo $Donnees['Nom_Diplome'] ?></option>   
							   <?php } ?>

							</select>
							<div class="input-field"><input type="text" name="Annee" class="form-control" required="required" placeholder="Ann&eacute;e d'obtention"></div>
							<center><h6>Si votre dipl&ocirc;me ne se trouve pas dans la liste, veuillez contacter les administrateurs.</h6></center>
							
							
						</div>

						

					</div>
					
					
					<button type="submit" id=ValiderProfil>
					<center>
						<b><font color=black>VALIDER</font></b>
						</center>
					</button>
					
					</form>
					
					<br><br>
					
					
										<div id=InfoPersoProfil style="height:150px;">
					<form action="Include_Profil/Script_DiplomeSuppr.php" method="post" enctype="multipart/form-data">
						<div id=TexteProfil style="width:300px; margin-left:260px;">
						<CENTER><h4><b>SUPPRIMER UN DIPLOME</b></h4></CENTER><br>
							
							<select name="ListeDiplomes" style="width:300px;">
							   <option value="0">S&eacute;lectionner un dipl&ocirc;me</option>
							   
							   <?php $Requete = "SELECT OBTENTIONDIPLOME.ID_Diplome, Nom_Diplome, Annee_Obtention FROM DIPLOME, OBTENTIONDIPLOME WHERE OBTENTIONDIPLOME.ID_Profil = '".$ID."' AND OBTENTIONDIPLOME.ID_Diplome = DIPLOME.ID_Diplome";
							   $Resultat = $Base->query($Requete);
							   while($Donnees = $Resultat->fetch()) 
							   { ?>
								<option value="<?php echo $Donnees['ID_Diplome'] ?>"><?php echo $Donnees['Nom_Diplome']." / ".$Donnees['Annee_Obtention'] ?></option>   
							   <?php } ?>

							</select>
							
							
						</div>

						

					</div>
					
					
					<button type="submit" id=ValiderProfil style="background-color: #BC280A;">
					<center>
						<b><font color=black>SUPPRIMER</font></b>
						</center>
					</button>
					
					</form>
					
					
					</div>
				</div>          
    </section>

    <?php include('footerOL.php'); ?>  
   
</body>
</html>

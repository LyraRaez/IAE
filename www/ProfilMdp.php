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
							$Requete = "SELECT mdp FROM MEMBRE WHERE ID_Profil = '".$ID."'";
							$Resultat = $Base->query($Requete);
							
							while($Donnees = $Resultat->fetch()) { 
							$mdp = $Donnees['mdp'];
							}

						?>
					<br><br>
					
					<div id=InfoPersoProfil style="height:230px;">
					
					<?php if(!isset($_POST['Pass1'])) { ?>

						<form action="ProfilMdp.php" method="post" enctype="multipart/form-data">
						<div id=TexteProfil style="width:300px; margin-left:260px;">
						<CENTER><h4><b>MODIFIER LE MOT DE PASSE</b></h4></CENTER><br>
						
							<div class="input-field"><input type="password" name="Pass1" class="form-control" required="required" placeholder="Ancien mot de passe"></div>
							<div class="input-field"><input type="password" name="Pass2" class="form-control" required="required" placeholder="Confirmation de l'ancien mot de passe"></div>
							<div class="input-field"><input type="password" name="Pass3" class="form-control" required="required" placeholder="Nouveau mot de passe"></div>
							
							
						</div>
					<?php } 
					else if(isset($_POST['Pass1']) && isset($_POST['Pass2']) && isset($_POST['Pass3'])){

								if(($_POST['Pass1'] == $mdp) && ($_POST['Pass2'] == $mdp))
								{
									$Requete = "UPDATE MEMBRE SET mdp= '".$_POST['Pass3']."' WHERE ID_Profil = '".$_SESSION['ID']."'";
									$Base->exec($Requete);
								
								?>
								
														<form action="ProfilMdp.php" method="post" enctype="multipart/form-data">
						<div id=TexteProfil style="width:300px; margin-left:260px;">
						<CENTER><h4><b>MODIFIER LE MOT DE PASSE</b></h4></CENTER><br>
						
							<div class="input-field"><input type="password" name="Pass1" class="form-control" required="required" placeholder="Ancien mot de passe"></div>
							<div class="input-field"><input type="password" name="Pass2" class="form-control" required="required" placeholder="Confirmation de l'ancien mot de passe"></div>
							<div class="input-field"><input type="password" name="Pass3" class="form-control" required="required" placeholder="Nouveau mot de passe"></div>
						
						<font color=green><center>Votre mot de passe a bien &eacute;t&eacute; chang&eacute;</center></font>
							</div>
						
							<?php }
							
							else{ ?>
								
																						<form action="ProfilMdp.php" method="post" enctype="multipart/form-data">
						<div id=TexteProfil style="width:300px; margin-left:260px;">
						<CENTER><h4><b>MODIFIER LE MOT DE PASSE</b></h4></CENTER><br>
						
							<div class="input-field"><input type="password" name="Pass1" class="form-control" required="required" placeholder="Ancien mot de passe"></div>
							<div class="input-field"><input type="password" name="Pass2" class="form-control" required="required" placeholder="Confirmation de l'ancien mot de passe"></div>
							<div class="input-field"><input type="password" name="Pass3" class="form-control" required="required" placeholder="Nouveau mot de passe"></div>
						
						<font color=red><center>Les deux mots de passe ne correspondent pas.</center></font>
							</div>
								
							<?php }

					} ?>
					


						

					</div>
					
					
					<button type="submit" id=ValiderProfil><center>
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

<?php include('headerOL.php');
include('Include_Index/Connexion_Base.php');  ?>
<?php date_default_timezone_set('UTC'); ?>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

<html lang="en">
    <section id="contact" >
				<div class="container">
					<div class="row">
						<?php
							$ID = $_GET['id'];
							$Requete = "SELECT Nom, Admin, Prenom, email, PhotoProfil, Sexe, DateNaissance, DateInscription, PDF, MessageHumeur from MEMBRE WHERE ID_Profil = '".$ID."'";
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
							$email = $Donnees['email'];
							}
							
					$Requete = $Base->query("SELECT * FROM OBTENTIONDIPLOME WHERE ID_Profil = '".$ID."'");
					$NombreDiplome = $Requete->rowCount();
							
							
						?>
					<br><br>
				
				<?php if(empty($_POST))
				{ ?>
			
				<form action="ContacterUtilisateur.php?id=<?php echo $ID ?>" method="post" enctype="multipart/form-data">
					<div id=InfoPersoProfil>
						<div class="input-field">
							<input type="text" name="Sujet" class="form-control" required="required" placeholder="Sujet">
						</div>
						<p></p>
						<div class="input-field">
							<textarea type="text" name="Message" class="form-control" rows=9 required="required" placeholder="Votre message"></textarea>
						</div>
					</div>
					
						<button type="submit" id=ValiderProfil style = "background-color: #DEA023;">
						<center>
						<b><font color=black>CONTACTER</font></b>
						</center>
						</button>
					</form>
					
				<?php }

				else 
				{
					$to = $email;
					$subject = $_SESSION['Prenom']." ".$_SESSION['Nom']." vous a envoyé un message";

					$message="<html><head></head><body><b>Sujet :</b> ".$_POST['Sujet']."<br><br><b>Message : </b>".$_POST['Message']."</body></html>";

					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

					mail($to, $subject, $message, $headers);
					
					?> 
					
									<form action="ContacterUtilisateur.php?id=<?php echo $ID ?>" method="post" enctype="multipart/form-data">
					<div id=InfoPersoProfil>
						<div class="input-field">
							<input type="text" name="Sujet" class="form-control" required="required" placeholder="Sujet">
						</div>
						<p></p>
						<div class="input-field">
							<textarea type="text" name="Message" class="form-control" rows=9 required="required" placeholder="Votre message"></textarea>
						</div><br>
						<center><font color=green>Votre message a bien &eacute;t&eacute; envoy&eacute;</font></center>
					</div>
					
						<button type="submit" id=ValiderProfil style = "background-color: #DEA023;">
						<center>
						<b><font color=black>CONTACTER</font></b>
						</center>
						</button>
					</form>
					
					<?php
				}
				
				?>
				

					
					
					</div>
				</div>          
    </section>

    <?php include('footerOL.php'); ?>  
   
</body>
</html>

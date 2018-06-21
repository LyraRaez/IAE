							
							<?php
							date_default_timezone_set('UTC');
							include('../../Include_Index/Connexion_Base.php');
							$Nom = $_POST['Nom'];
							$Date = $_POST['Date'];
							$PDF = $_FILES['PDF']['name'];
							move_uploaded_file( $_FILES['PDF']['tmp_name'], '../../pdf/Evenements/'.$_FILES['PDF']['name']);
							
							$Requete = "INSERT INTO EVENEMENT (Nom, Date, PDF) VALUES ('".htmlentities(stripslashes($Nom) ,ENT_QUOTES,'UTF-8')."','".$Date."','".$PDF."')";
							$Base->exec($Requete);
							
							$Requete = "SELECT email FROM NEWSLETTER";
								   $Resultat = $Base->query($Requete);
								   while($Donnees = $Resultat->fetch()) 
								   {
										$to = $Donnees['email'];
										$subject = "[NOUVEL EVENEMENT] ".$Nom;
										$message="<html><head></head><body>".$Nom." aura lieu le ".$Date.". <br>Plus d'informations sur le site.<br><br>Ceci vous a été envoyé au vu de votre inscription à la newsletter.</body></html>";

										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

										mail($to, $subject, $message, $headers);
								   }
							
							
							header('Location: ../../gestion.php');
						
							

						
							?>
							<?php
							session_start();
							include('../../Include_Index/Connexion_Base.php');
							$NomEntr = $_POST['NomEntreprise'];
							$NomOffre = $_POST['NomOffre'];
							$PDF = $_FILES['PDF']['name'];
							$Logo = $_FILES['Logo']['name'];
							$Date = $_POST['date'];
							
							move_uploaded_file( $_FILES['PDF']['tmp_name'], '../../pdf/Offres/'.$_FILES['PDF']['name']);
							move_uploaded_file( $_FILES['Logo']['tmp_name'], '../../Images/Offres/'.$_FILES['Logo']['name']);
							
							$Requete = "INSERT INTO OFFRE (Nom_Entreprise, Nom_Offre, PDF, Logo, Date) VALUES ('".htmlentities(stripslashes($NomEntr) ,ENT_QUOTES,'UTF-8')."','".htmlentities(stripslashes($NomOffre) ,ENT_QUOTES,'UTF-8')."','".$PDF."','".$Logo."','".$Date."')";
							$Base->exec($Requete);
							
							$Requete = "SELECT email FROM NEWSLETTER";
								   $Resultat = $Base->query($Requete);
								   while($Donnees = $Resultat->fetch()) 
								   {
										$to = $Donnees['email'];
										$subject = "[NOUVELLE OFFRE] ".$NomOffre;
										$message="<html><head></head><body>".$NomEntr." a proposé l'offre suivante : ".$NomOffre.". <br>Plus d'informations sur le site.<br><br>Ceci vous a été envoyé au vu de votre inscription à la newsletter.</body></html>";

										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

										mail($to, $subject, $message, $headers);
								   }
							
							header('Location: ../../gestion.php');
						
							?>
							<?php
							session_start();
							include('../../Include_Index/Connexion_Base.php');
							$Nom = $_POST['nom'];
							$Desc = $_POST['description'];
							$PDF = $_FILES['PDF']['name'];
							$Image = $_FILES['Image']['name'];
							$Keywords = $_POST['keywords'];
							$Date = $_POST['date'];
							$NomArt = $_SESSION['Nom']." ". $_SESSION['Prenom'];
							
							move_uploaded_file( $_FILES['PDF']['tmp_name'], '../../pdf/Articles/'.$_FILES['PDF']['name']);
							move_uploaded_file( $_FILES['Image']['tmp_name'], '../../Images/Articles/'.$_FILES['Image']['name']);
							
							$Requete = "INSERT INTO ARTICLE (Titre_Article, Desc_Article, PDF, Image, Date, Mots_Cles, NomAuteur) VALUES ('".htmlentities(stripslashes($Nom) ,ENT_QUOTES,'UTF-8')."','".htmlentities(stripslashes($Desc) ,ENT_QUOTES,'UTF-8')."','".$PDF."','".$Image."','".$Date."','".$Keywords."','".htmlentities(stripslashes($NomArt) ,ENT_QUOTES,'UTF-8')."')";
							$Base->exec($Requete);
							
							$Requete = "SELECT email FROM NEWSLETTER";
								   $Resultat = $Base->query($Requete);
								   while($Donnees = $Resultat->fetch()) 
								   {
										$to = $Donnees['email'];
										$subject = "[NOUVEL ARTICLE] ".$Nom;
										$message="<html><head></head><body>".$NomArt." a publié l'article suivant : ".$Nom.". <br>Plus d'informations sur le site.<br><br>Ceci vous a été envoyé au vu de votre inscription à la newsletter.</body></html>";

										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

										mail($to, $subject, $message, $headers);
								   }
							
							
							header('Location: ../../gestion.php');
						
							?>
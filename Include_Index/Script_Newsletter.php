<?php

					include('Connexion_Base.php');
					
					$email = $_POST['email'];
					$Req = $Base->query("SELECT * FROM NEWSLETTER WHERE email = '".$email."'");
					$Exist = $Req->rowCount();
								   
					if($Exist == 0)
					{
					$Requete = "INSERT INTO NEWSLETTER (email) VALUES ('".$email."')";
					$Base->exec($Requete);
					$to = $email;
					$subject = "Vous avez �t� inscrit � la NEWSLETTER";
					$message="<html><head></head><body>Votre adresse e-mail a �t� enregistr�e.<br>Vous recevrez les derniers articles et les derniers �v�nements dans votre bo�te mail.<br><br>Pour cesser de recevoir ces mails, merci de contacter les administrateurs</body></html>";

					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

					mail($to, $subject, $message, $headers);
					
										header('Location: ../indexOL.php');
					}
					else
					{
										header('Location: ../indexOL.php');
					}


?>

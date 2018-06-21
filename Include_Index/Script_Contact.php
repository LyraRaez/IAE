<?php

					include('Connexion_Base.php');
					
					$Requete = "SELECT email FROM EMAILCONTACT";
								   $Resultat = $Base->query($Requete);
								   while($Donnees = $Resultat->fetch()) 
								   {
									   $email = $Donnees['email'];
								   }
					
					$to = $email;
					$subject = "[CONTACT] ".$_POST['name']." vous a envoyé un message";

					$message="<html><head></head><body><b>E-mail :</b> ".$_POST['email']."<br><br><b>Message : </b>".$_POST['message']."</body></html>";

					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

					mail($to, $subject, $message, $headers);
					
					header('Location: ../indexOL.php');

?>

				<?php
				
					if(!isset($_GET['operation'])){ header('Location: indexOL.php'); }
					else if($_GET['operation'] == "contact"){ echo "Votre message a bien été envoyé. Vous allez être redirigé(e) vers l'accueil."; sleep(5); header('Location: indexOL.php'); }
					else if($_GET['operation'] == "newsletter"){ echo "Vous avez bien été inscrit(e) à la newsletter. Vous allez être redirigé(e) vers l'accueil."; sleep(5); header('Location: indexOL.php'); }
					else if($_GET['operation'] == "newsletterfail"){ echo "Erreur : Vous êtes déjà inscrit(e) à la newsletter. Vous allez être redirigé(e) vers l'accueil."; sleep(5); header('Location: indexOL.php'); }
					
				?>
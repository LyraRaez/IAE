				<?php
				
					if(!isset($_GET['operation'])){ header('Location: indexOL.php'); }
					else if($_GET['operation'] == "contact"){ echo "Votre message a bien �t� envoy�. Vous allez �tre redirig�(e) vers l'accueil."; sleep(5); header('Location: indexOL.php'); }
					else if($_GET['operation'] == "newsletter"){ echo "Vous avez bien �t� inscrit(e) � la newsletter. Vous allez �tre redirig�(e) vers l'accueil."; sleep(5); header('Location: indexOL.php'); }
					else if($_GET['operation'] == "newsletterfail"){ echo "Erreur : Vous �tes d�j� inscrit(e) � la newsletter. Vous allez �tre redirig�(e) vers l'accueil."; sleep(5); header('Location: indexOL.php'); }
					
				?>
						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['EmailSuppr'];
							$Requete = "DELETE FROM NEWSLETTER WHERE email = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
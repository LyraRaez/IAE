						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['EvenementSuppr'];
							$Requete = "DELETE FROM EVENEMENT WHERE ID = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
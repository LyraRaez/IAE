						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['MembreSuppr'];
							$Requete = "DELETE FROM MEMBRE WHERE ID_Profil = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
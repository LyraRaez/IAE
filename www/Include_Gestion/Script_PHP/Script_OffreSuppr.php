						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['OffreSuppr'];
							$Requete = "DELETE FROM OFFRE WHERE ID_Offre = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
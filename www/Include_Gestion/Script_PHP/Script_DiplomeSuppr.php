						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['DiplomeSuppr'];
							$Requete = "DELETE FROM Diplome WHERE ID_Diplome = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
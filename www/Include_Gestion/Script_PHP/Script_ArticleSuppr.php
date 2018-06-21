						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['ActuSuppr'];
							$Requete = "DELETE FROM ARTICLE WHERE ID_Article = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
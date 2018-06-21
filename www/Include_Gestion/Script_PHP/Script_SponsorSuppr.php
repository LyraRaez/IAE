						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['SponsorSuppr'];
							$Requete = "DELETE FROM SPONSOR WHERE Nom = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
							<?php
							include('../../Include_Index/Connexion_Base.php');
							$Nom = $_POST['Nom'];

							
							$Requete = "INSERT INTO DIPLOME (Nom_Diplome) VALUES ('".htmlentities(stripslashes($Nom) ,ENT_QUOTES,'UTF-8')."')";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						
							?>
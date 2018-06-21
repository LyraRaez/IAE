							<?php
							session_start();
							include('../Include_Index/Connexion_Base.php');
							
							$DiplomeID = $_POST['ListeDiplomes'];
							$Annee = $_POST['Annee'];
							$ID = $_SESSION['ID'];

							
								
							$Requete = "INSERT INTO OBTENTIONDIPLOME (ID_Diplome, ID_Profil, Annee_Obtention) VALUES ('".$DiplomeID."','".$ID."','".$Annee."')";
							$Base->exec($Requete);
							
							header('Location: ../Profil.php');
						
							?>
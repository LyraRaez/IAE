						<?php 
						session_start();
						include('../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['ListeDiplomes'];
							$Requete = "DELETE FROM OBTENTIONDIPLOME WHERE ID_Diplome = '".$ID."' AND ID_Profil = '".$_SESSION['ID']."'";
							$Base->exec($Requete);
							header('Location: ../Profil.php');
						?>
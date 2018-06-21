							<?php
							session_start();
							include('../Include_Index/Connexion_Base.php');
							
							if($_FILES['PdP']['name'] != ""){ $_FILES['PdP']['name'] = $_SESSION['Nom'].$_SESSION['Prenom'].$_FILES['PdP']['name']; }
							if($_FILES['PDF']['name'] != ""){ $_FILES['PDF']['name'] = $_SESSION['Nom'].$_SESSION['Prenom'].$_FILES['PDF']['name']; }
							
							
							$Nom = $_POST['Nom'];
							$Prenom = $_POST['Prenom'];
							$Ddn = $_POST['Ddn'];
							$PDF = $_FILES['PDF']['name'];
							$PdP = $_FILES['PdP']['name'];
							$Message = $_POST['Message'];
							
							move_uploaded_file( $_FILES['PDF']['tmp_name'], '../pdf/Profil/'.$_FILES['PDF']['name']);
							move_uploaded_file( $_FILES['PdP']['tmp_name'], '../images/Profil/'.$_FILES['PdP']['name']);
								
							$Requete = "UPDATE MEMBRE SET Nom = '".$Nom."', Prenom = '".$Prenom."', PhotoProfil = '".$_FILES['PdP']['name']."', DateNaissance = '".$Ddn."', PDF = '".$_FILES['PDF']['name']."', MessageHumeur = '".$Message."' WHERE ID_Profil = '".$_SESSION['ID']."'";
							$Base->exec($Requete);
							
							header('Location: ../Profil.php');
						
							?>
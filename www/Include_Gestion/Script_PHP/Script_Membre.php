							<?php
							include('../../Include_Index/Connexion_Base.php');
							date_default_timezone_set('UTC');
							
							$char = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
							$mot_de_passe = str_shuffle($char);
							$Mdp = substr($mot_de_passe,0,6);
							
							$Nom = $_POST['Nom'];
							$Prenom = $_POST['Prenom'];
							$Email = $_POST['Email'];
							$Sexe = $_POST['Sexe'];
							$DateInscription = $_POST['date'];
							
							if($_POST['Compte'] == "Compte utilisateur") { $Admin = 0; }
							else { $Admin = 1; }
							
							$Requete = "INSERT INTO MEMBRE (nom, prenom, email, mdp, sexe, dateinscription, admin) VALUES ('".$Nom."','".$Prenom."','".$Email."','".$Mdp."','".$Sexe."','".$DateInscription."','".$Admin."')";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						
							?>
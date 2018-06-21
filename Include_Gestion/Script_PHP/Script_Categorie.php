							<?php
							include('../../Include_Index/Connexion_Base.php');
							date_default_timezone_set('UTC');
						
							
							$Categorie = $_POST['categorie'];
							
							$Requete = "INSERT INTO GALERIECATEGORIE (Nom_Categorie) VALUES ('".$Categorie."')";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						
							?>
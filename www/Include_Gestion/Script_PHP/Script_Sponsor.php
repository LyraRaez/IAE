							<?php
							include('../../Include_Index/Connexion_Base.php');
							$Nom = $_POST['Nom'];
							$Lien = $_POST['Lien'];
							$Image = $_FILES['Image']['name'];
							
							move_uploaded_file( $_FILES['Image']['tmp_name'], '../../Images/Sponsors/'.$_FILES['Image']['name']);
							
							$Requete = "INSERT INTO SPONSOR (Nom, Lien, Image) VALUES ('".htmlentities(stripslashes($Nom) ,ENT_QUOTES,'UTF-8')."','".htmlentities(stripslashes($Lien) ,ENT_QUOTES,'UTF-8')."','".$Image."')";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						
							?>
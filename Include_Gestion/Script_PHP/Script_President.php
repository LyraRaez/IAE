							<?php
							include('../../Include_Index/Connexion_Base.php');
							$mot = $_POST['description_mot'];
							$Nom = $_POST['name_president'];
							$Fct = $_POST['name_fonction'];
							$Image = $_FILES['pic_president']['name'];
							
							move_uploaded_file( $_FILES['pic_president']['tmp_name'], '../../Images/President/'.$_FILES['pic_president']['name']);
							
							$Requete = "UPDATE MOTPRESIDENT SET Message = '".htmlentities(stripslashes($mot) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							$Requete = "UPDATE MOTPRESIDENT SET Nom = '".htmlentities(stripslashes($Nom) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							$Requete = "UPDATE MOTPRESIDENT SET Fonction = '".htmlentities(stripslashes($Fct) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							$Requete = "UPDATE MOTPRESIDENT SET LienPhoto = '".htmlentities(stripslashes($Image) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
							?>
							

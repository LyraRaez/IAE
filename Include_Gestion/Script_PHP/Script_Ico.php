							<?php
							include('../../Include_Index/Connexion_Base.php');
							$Logo = $_FILES['pic_IAE']['name'];
							$Icone = $_FILES['icone_IAE']['name'];
							
							move_uploaded_file( $_FILES['pic_IAE']['tmp_name'], '../../Images/Logo_Icone/'.$_FILES['pic_IAE']['name']);
							move_uploaded_file( $_FILES['icone_IAE']['tmp_name'], '../../Images/Logo_Icone/'.$_FILES['icone_IAE']['name']);
							
							$Requete = "UPDATE LOGO SET Logo = '".htmlentities(stripslashes($Logo) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							$Requete = "UPDATE LOGO SET Icone = '".htmlentities(stripslashes($Icone) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
							?>
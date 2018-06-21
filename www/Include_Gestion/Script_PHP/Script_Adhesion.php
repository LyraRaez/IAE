							<?php
							include('../../Include_Index/Connexion_Base.php');
							$Adhesion = $_POST['Adhesion'];
							$PDF = $_FILES['PDF']['name'];
							
							move_uploaded_file( $_FILES['PDF']['tmp_name'], '../../PDF/Adhesion/'.$_FILES['PDF']['name']);
							
							$Requete = "UPDATE ADHESION SET Message = '".htmlentities(stripslashes($Adhesion) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							$Requete = "UPDATE ADHESION SET Lien_PDF = '".htmlentities(stripslashes($PDF) ,ENT_QUOTES,'UTF-8' )."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
							?>
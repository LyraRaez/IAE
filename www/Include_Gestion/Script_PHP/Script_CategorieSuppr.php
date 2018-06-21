						<?php 
						
						include('../../Include_Index/Connexion_Base.php');	
						
						
						$ID = $_POST['CategorieSuppr'];
							$Requete = "DELETE FROM GALERIECATEGORIE WHERE ID_Categorie = '".$ID."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
						?>
							<?php
							include('../../Include_Index/Connexion_Base.php');
							$email = $_POST['email'];

							$Requete = "UPDATE EMAILCONTACT SET email = '".$email."'";
							$Base->exec($Requete);
							
							header('Location: ../../gestion.php');
							?>
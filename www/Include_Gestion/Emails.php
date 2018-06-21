					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Modifier l'e-mail de contact</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_EmailContact.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">
							<?php
							$Requete = "SELECT email from EMAILCONTACT";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							?>
							        <input type="email" name="email" class="form-control" required="required" placeholder="Nouvel e-mail" value="<?php echo $Donnees['email'] ?>">

							
							<?php } ?>
                                </div>
								<br>
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter le fichier</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer un e-mail de la newsletter</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_EmailSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="EmailSuppr" size="8" style="width: 500px;">
																
							<?php
							$Requete = "SELECT email from NEWSLETTER";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							?>
							        <option value="<?php echo $Donnees['email'] ?>"><?php echo $Donnees['email'] ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
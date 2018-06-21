					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter un membre</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Membre.php" method="post" enctype="multipart/form-data">
                                <div class="input-field"><input type="text" name="Nom" class="form-control" required="required" placeholder="Nom"></div>
								<p></p>
								<div class="input-field"><input type="text" name="Prenom" class="form-control" required="required" placeholder="Pr&eacute;nom"></div>
								<p></p>
								<div class="input-field"><input type="text" name="Email" class="form-control" required="required" placeholder="E-mail"></div>
								<p></p>
								<SELECT name="Sexe" size="1" style="width: 520px;" required="required">
									<option>Homme</option>
									<option>Femme</option>
								</SELECT><br><p></p>
								<SELECT name="Compte" size="1" style="width: 520px;" required="required">
									<option>Compte utilisateur</option>
									<option>Compte administrateur (Tous les droits)</option>
								</SELECT><br><p></p>
								<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter un membre</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer un membre</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_MembreSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="MembreSuppr" size="8" style="width: 500px;">
																
							<?php
							$Requete = "SELECT ID_Profil, Nom, Prenom, email from MEMBRE ORDER BY ID_Profil DESC";
							$Resultat = $Base->query($Requete); 
							while($Donnees = $Resultat->fetch()) { 
							$Age = round(date("Y-m-d") - $Donnees['DateNaissance']); ?>
							
							        <option value="<?php echo $Donnees['ID_Profil'] ?>"><?php echo $Donnees['Nom']." ".$Donnees['Prenom']." - ".$Donnees['email'] ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
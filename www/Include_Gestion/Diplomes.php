					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter un diplome</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Diplome.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <input type="text" name="Nom" class="form-control" required="required" placeholder="Nom du diplome">
                                </div>
								<br>
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter le diplome</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer un diplome</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_DiplomeSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="DiplomeSuppr" size="8" style="width: 500px;">
																
							<?php
							$Requete = "SELECT ID_Diplome, Nom_Diplome from DIPLOME ORDER BY ID_Diplome DESC";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							?>
							        <option value="<?php echo $Donnees['ID_Diplome'] ?>"><?php echo $Donnees['Nom_Diplome']; ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
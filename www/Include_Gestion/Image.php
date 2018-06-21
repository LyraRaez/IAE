					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter une image</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Image.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <input type="text" name="nom" class="form-control" required="required" placeholder="Nom de l'article">
                                </div>
                                <p><p>
								<div class="input-field">
								Ins&eacute;rer l'image :
                                    <input type="file" name="Image" class="form-control" required="required" placeholder="Sélectionnez le fichier">
                                </div><p></p>
								Choisir la cat&eacute;gorie de l'image :
								<SELECT name="Compte" size="1" style="width: 520px;" required="required">

															<?php
							$Requete = "SELECT ID_Categorie, Nom_Categorie from GALERIECATEGORIE";
							$Resultat = $Base->query($Requete); 
							while($Donnees = $Resultat->fetch()) { 
							 ?>
									<option value="<?php echo $Donnees['ID_Categorie'] ?>"><?php echo $Donnees['Nom_Categorie']; ?></option>
							<?php } ?>
								
								
								</SELECT>
								<br><br>
								<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter le fichier</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer une image</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_ImageSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="ActuSuppr" size="9" style="width: 500px;">
																
							<?php
							$Requete = "SELECT ID_Photo, Nom_Photo from GALERIE ORDER BY ID_Photo DESC;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							?>
							        <option value="<?php echo $Donnees['ID_Photo'] ?>"><?php echo $Donnees['Nom_Photo']; ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
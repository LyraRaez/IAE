					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter une cat&eacute;gorie d'images</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Categorie.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">

							        <input type="text" name="categorie" class="form-control" required="required" placeholder="Nouvelle cat&eacute;gorie">
									
						
                                </div>
								<br>
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter la cat&eacute;gorie</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer une cat&eacute;gorie d'images</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_CategorieSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="CategorieSuppr" size="8" style="width: 500px;">
																

							<?php
							$Requete = "SELECT ID_Categorie, Nom_Categorie from GALERIECATEGORIE";
							$Resultat = $Base->query($Requete); 
							while($Donnees = $Resultat->fetch()) { 
							 ?>
									<option value="<?php echo $Donnees['ID_Categorie'] ?>"><?php echo $Donnees['Nom_Categorie']; ?></option>
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
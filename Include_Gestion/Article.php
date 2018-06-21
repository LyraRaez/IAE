					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter un article</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Article.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <input type="text" name="nom" class="form-control" required="required" placeholder="Nom de l'article">
                                </div>
                                <p><p>
                                <div class="input-field">
                                    <textarea type="text" name="description" class="form-control" required="required" placeholder="Description de l'article"></textarea>
                                </div>
                                <p><p>
                                <div class="input-field">
                                    <input name="keywords" class="form-control" required="required" placeholder="Mots cl&eacute;s (IAE, Num&eacute;rique, ..)">
                                </div>
                                <p><p>
								<div class="input-field">
								Ins&eacute;rer le PDF :
                                    <input type="file" name="PDF" class="form-control" required="required" placeholder="Sélectionnez le fichier">
                                </div>
								<div class="input-field">
								Ins&eacute;rer la miniature de l'article :
                                    <input type="file" name="Image" class="form-control" required="required" placeholder="Sélectionnez le fichier">
                                </div><br>
								<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter le fichier</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer un article</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_ArticleSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="ActuSuppr" size="15" style="width: 500px;">
																
							<?php
							$Requete = "SELECT ID_Article, Titre_Article, Date from ARTICLE ORDER BY ID_Article DESC;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							$dateStr = new DateTime($Donnees['Date']);
							$result = $dateStr->format('d / m / Y');
							?>
							        <option value="<?php echo $Donnees['ID_Article'] ?>"><?php echo $result. " | ".$Donnees['Titre_Article']; ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
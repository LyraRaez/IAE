					<?php date_default_timezone_set('UTC'); ?>
						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter une offre</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Offre.php" method="post" enctype="multipart/form-data">
							    <div class="input-field">
                                    <input type="text" name="NomEntreprise" class="form-control" required="required" placeholder="Nom de l'entreprise">
                                </div>
                                <p><p>
                                <div class="input-field">
                                    <input type="text" name="NomOffre" class="form-control" required="required" placeholder="Intitul&eacute; de l'offre">
                                </div>
                                <p><p>
								<div class="input-field">
								Ins&eacute;rer le PDF :
                                    <input type="file" name="PDF" class="form-control" required="required" placeholder="Sélectionnez le fichier">
                                </div>
								<div class="input-field">
								Ins&eacute;rer le logo de l'entreprise :
                                    <input type="file" name="Logo" required="required" class="form-control" placeholder="Sélectionnez le fichier">
                                </div><br>
								<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter l'offre</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer une offre</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_OffreSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="OffreSuppr" size="15" style="width: 500px;">
																
							<?php
							$Requete = "SELECT ID_Offre, Nom_Entreprise, Nom_Offre, Date from OFFRE ORDER BY Date DESC;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							$dateStr = new DateTime($Donnees['Date']);
							$result = $dateStr->format('d / m / Y');
							?>
							        <option value="<?php echo $Donnees['ID_Offre'] ?>"><?php echo $result. " | ".$Donnees['Nom_Entreprise']." - ".$Donnees['Nom_Offre']; ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
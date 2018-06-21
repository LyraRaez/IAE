						<br><br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Ajouter un sponsor</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_Sponsor.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <input type="text" name="Nom" class="form-control" required="required" placeholder="Nom du sponsor">
                                </div>
                                <p><p>
                                <div class="input-field">
                                    <input type="text" name="Lien" class="form-control" placeholder="Lien vers le site du sponsor">
                                </div>
                                <p><p>
								<div class="input-field">
								Ins&eacute;rer le logo du sponsor :
                                    <input type="file" name="Image" class="form-control" required="required" placeholder="Sélectionnez le fichier">
                                </div><br>
								<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter le sponsor</button>
                            </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer un sponsor</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_SponsorSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="SponsorSuppr" size="8" style="width: 500px;">
																
							<?php
							$Requete = "SELECT Nom from SPONSOR ORDER BY Nom;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							?>
							        <option value="<?php echo $Donnees['Nom'] ?>"><?php echo $Donnees['Nom'] ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
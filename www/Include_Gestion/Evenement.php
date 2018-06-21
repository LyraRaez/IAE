						<br><br>
						<div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3> Ajouter un nouvel &eacute;v&egrave;nement</h3><br>
							<form action="Include_Gestion/Script_PHP/Script_Evenement.php" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <input type="text" name="Nom" class="form-control" requiered="required" placeholder="Nom de l'&eacute;v&egrave;nement">
                                </div>
                                <br>
								Ins&eacute;rer la date de l'&eacute;v&egrave;nement :
                                <div class="input-field">
                                    <input type="Date" name="Date" class="form-control" required="required" placeholder="Date de l'évenement">
                                </div>
                                <br>
								Ins&eacute;rer le PDF :
                                <div class="input-field">
                                    <input type="file" name="PDF" class="form-control" required="required" placeholder="PDF de l'évenement">
                                </div>
                                <br>
                                <div class="input-field">
                                    <button type="submit" id="upload_event" class="btn btn-blue btn-effect">Ajouter l'&eacute;v&egrave;nement</button>
                                </div>
								</form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3>Supprimer un &eacute;v&egrave;nement</h3><br>
                            <form action="Include_Gestion/Script_PHP/Script_EvenementSuppr.php" method="post" enctype="multipart/form-data">
                                    <select name="EvenementSuppr" size="11" style="width: 500px;">
																
							<?php
							$Requete = "SELECT ID, Nom, Date from EVENEMENT ORDER BY DATE;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { 
							$dateStr = new DateTime($Donnees['Date']);
							$result = $dateStr->format('d / m / Y');?>
							
							        <option value="<?php echo $Donnees['ID'] ?>"><?php echo $result. " | ".$Donnees['Nom']; ?></option>

							
							<?php } ?>
                                    </select>
                              
                                <br><br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>
							</form>
                        </div>
                    </div>
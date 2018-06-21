							<?php
							include('Include_Index/Connexion_Base.php');
							$Requete = "select Nom, Fonction, Message, LienPhoto from MOTPRESIDENT;";
							$Resultat = $Base->query($Requete); $Afficher = $Resultat->fetch();
							if(count($Afficher)>0) 
							{ 
								$Nom = $Afficher['Nom']; $Fct = $Afficher['Fonction'];
								$LienPhoto = $Afficher['LienPhoto'];
								$Message = $Afficher['Message'];
								$Image = $Afficher['LienPhoto'];
							}
							?>
					<div class="row">
                    <div class="col-md-5 col-sm-12 wow animated fadeInRight">
					<form action="Include_Gestion/Script_PHP/Script_President.php" method="post" enctype="multipart/form-data">	
                            <h3>Mot du Pr&eacute;sident</h3><br>
                                <div class="input-field">
                                    <textarea type="text" name="description_mot" class="form-control" rows=6 required="required" placeholder="Veuillez entrer le mot du Pr&eacute;sident"><?php echo $Message ?></textarea>
                                </div>
                                <br>

                        </div>
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">  

                            <h3>Modifier le nom, la fonction et l'image</h3>
                             <br>
                                <div class="input-field"><input type="text" name="name_president" class="form-control" required="required" placeholder="Modifier le nom" value = "<?php echo $Nom ?>"></div>
								<div class="input-field"><input type="text" name="name_fonction" class="form-control" required="required" placeholder="Modifier la fonction" value= "<?php echo $Fct ?>"></div>
                                <p><br></p>
                                <div class="input-field">
                                    <input type="file" name="pic_president" class="form-control" placeholder="Sélectionnez la photo" >
                                </div>
                                <p><br></p>
								<button type="submit" id="upload_president" class="btn btn-blue btn-effect">Changer le mot du Pr&eacute;sident</button>
								
                        </div>
					</form>
                    </div><br><br><br>
					<?php
						include('Include_Index/Connexion_Base.php');
						$Requete = "select Message, Lien_PDF, Icone, Logo from ADHESION, LOGO;";
						$Resultat = $Base->query($Requete); $Afficher = $Resultat->fetch();
						if(count($Afficher)>0) 
						{ 
							$MessageAd = $Afficher['Message']; $Lien_PdfAd = $Afficher['Lien_PDF'];
							$Icone = $Afficher['Icone']; $Logo = $Afficher['Logo'];
						}
					?>


				   <div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Changer le logo du site</h3>
                             <form action="Include_Gestion/Script_PHP/Script_Ico.php" method="post" enctype="multipart/form-data">
                                <br>
                                    <div class="input-field">
									Changer le logo du site :
                                        <input type="file" name="pic_IAE" class="form-control" required="required" placeholder="Changer l'image">
                                    </div>
                                <br><br>
                                    <div class="input-field">
									Changer l'ic&ocirc;ne du site :
                                        <input type="file" name="icone_IAE" class="form-control" required="required" placeholder="changer l'icône">
                                    </div>
                                <br><br>
                                <button type="submit" id="upload_pic" class="btn btn-blue btn-effect"> Changer l'image</button>
                             </form>
                        </div>
						
						
						
						
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3> Modification de l'adh&eacute;sion</h3><br>
							
							<form action="Include_Gestion/Script_PHP/Script_Adhesion.php" method="post" enctype="multipart/form-data">
							<div class="input-field">
								Changer le lien du PDF :
                            <input type="file" name="PDF" class="form-control" required="required">
                            </div><br>
                            <textarea type="text" name="Adhesion" class="form-control" required="required" rows=4 placeholder="Description de l'article"><?php echo $MessageAd ?></textarea>
                            <br>
                            <button type="submit" id="maj_why_add" class="btn btn-blue btn-effect"> Modifier la pr&eacute;sentation</button>
							</form>
                        </div>
                    </div>
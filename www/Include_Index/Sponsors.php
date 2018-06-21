				<?php include('Include_Index/Connexion_Base.php'); ?>
				<div id="Sponsors" align=center style="width:100%; padding:30px; background-color: #F4F4F4; width:100%;">	
				
				
				        <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt="" width="200"></p>
				
                        <h1 id="Sponsors">NOS SPONSORS</h1>
                        <p>Voici ci-dessous les diff&eacute;rents sponsors nous soutenant <br></p>
						</div>
					
						<div id=LogoSponsors class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						
						
							<?php
							$Requete = "SELECT Nom, Lien, Image from SPONSOR";
							$Resultat = $Base->query($Requete);
							$Compteur = 0;
							while($Donnees = $Resultat->fetch()) { 
							?>
							
							        <div class="col-xs-3 col-sm-2" align=center>
                                        <a target="_blank" href="<?php echo $Donnees['Lien'] ?>"><img src="images/Sponsor/<?php echo $Donnees['Image'] ?>" class="img-responsive" alt=""></a>
                                    </div>
							
							
							<?php 
							$Compteur++;
							if($Compteur == 6){
								?> </div>
								<br>
								<div id=LogoSponsors class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms"><?php
							$Compteur = 0;							
							}
							
							} ?>
						
						</div>
                    </div>
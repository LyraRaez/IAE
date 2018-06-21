			<?php include('Include_Index/Connexion_Base.php'); 
			$compteur = 0; ?>
			<div id="Actualites" style="width:100%; padding:30px; background-color: #85afc7;">	
			  <h1 id="ActualitesTitre" class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">ACTUALIT&#201;S</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Retrouvez ci-dessous les derni&egrave;res actualit&eacute;s.
                </p><br><br>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
						
							<?php
							$Requete = "SELECT ID_Article, Titre_Article, Desc_Article, PDF, Image from ARTICLE ORDER BY ID_Article DESC LIMIT 4;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { ?>
							
								<div class="col-sm-3 col-xs-6">
									<div class="team-single-wrapper">
										<div class="team-single">
											<div class="person-thumb">
												<a target="_blank" href="pdf/Articles/<?php echo $Donnees['PDF'] ?>"><img src="images/Articles/<?php echo $Donnees['Image']?>" width="220px" class="img-responsive" alt="">
											</div>
											<div class="social-profile">
												<ul class="nav nav-pills">
												</ul>
											</div>
										</div>
										<div class="person-info">
											<h2><?php echo $Donnees['Titre_Article'] ?></h2>
											<p><?php echo $Donnees['Desc_Article'] ?></p>
											<?php $compteur = $Donnees['ID_Article'] ?>
										</div>
									</div>
								</div>
							
							<?php } ?>
                        </div>
						
						<div class="item">
						
							<?php
							$Requete = "SELECT ID_Article, Titre_Article, Desc_Article, PDF, Image from ARTICLE WHERE ID_Article < ".$compteur." ORDER BY ID_Article DESC LIMIT 4;";
							$Resultat = $Base->query($Requete);
							while($Donnees = $Resultat->fetch()) { ?>
							
								<div class="col-sm-3 col-xs-6">
									<div class="team-single-wrapper">
										<div class="team-single">
											<div class="person-thumb">
												<a target="_blank" href="pdf/Articles/<?php echo $Donnees['PDF'] ?>"><img src="images/Articles/<?php echo $Donnees['Image']?>" width="220px" class="img-responsive" alt="">
											</div>
											<div class="social-profile">
												<ul class="nav nav-pills">
												</ul>
											</div>
										</div>
										<div class="person-info">
											<h2><?php echo $Donnees['Titre_Article'] ?></h2>
											<p><?php echo $Donnees['Desc_Article'] ?></p>
											<?php $compteur = $Donnees['ID_Article'] ?>
										</div>
									</div>
								</div>
							
							<?php } ?>
						
						</div>
                    </div>
                    
                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
<?php include('headerOL.php');
include('Include_Index/Connexion_Base.php');  ?>
<?php date_default_timezone_set('UTC'); ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

   <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
						
						
                    
					
					<?php
					
					$OffresParPage = 12;
					$OffresTotalesReq = $Base->query('SELECT * FROM OFFRE');
					$OffresTotales = $OffresTotalesReq->rowCount();
					$TotalPages = ceil($OffresTotales/$OffresParPage) + 1;
					
					if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
					{
						$_GET['page'] = intval($_GET['page']);
						$PageCourante = $_GET['page'];
					}
					else{ $PageCourante = 1; }
					$Depart = ($PageCourante-1)*$OffresParPage;
					
					?>
					
					
					<?php
						$Requete = 'SELECT ID_Offre, Nom_Entreprise, Nom_Offre, PDF, Logo, Date FROM OFFRE ORDER BY ID_Offre DESC LIMIT '.$Depart.','.$OffresParPage;
							$Resultat = $Base->query($Requete);
							$Compt = 0;
							while($Donnees = $Resultat->fetch()) { 
							
							$dateStr = new DateTime($Donnees['Date']);
							$d = $dateStr->format('d / m / Y');

								if($Compt == 0){
									?>
									<div id=MilieuDroiteOffre>
									 <div id=OffreGauche class="wow animated fadeInRight">
											<div class="single-blog two-column">
											<div class="post-thumb">
												<a href="pdf/Offres/<?php echo $Donnees['PDF'] ?>"><img src="images/Offres/<?php echo $Donnees['Logo']?>" width="300px"; height="100px"; alt=""></a>
											</div>
											<div class="post-content overflow">
												<h2 class="post-title bold"><?php echo $Donnees['Nom_Offre'] ?></h2>
												<i><h4 class="post-author">Proposée par <?php echo $Donnees['Nom_Entreprise'] ?></h4></i>
												<p class="post-description">Le <?php echo $d ?></p>
												
											</div>
											</div>
									</div>
									
										<?php
										$Compt++;			
								}
								
								else if($Compt == 1){
									?>
																		 
									<div id=OffreDroit class="wow animated fadeInLeft">
											<div class="single-blog two-column">
											<div class="post-thumb">
												<a href="pdf/Offres/<?php echo $Donnees['PDF'] ?>"><img src="images/Offres/<?php echo $Donnees['Logo']?>" width="300px"; height="100px"; alt=""></a>
											</div>
											<div class="post-content overflow">
												<h2 class="post-title bold"><?php echo $Donnees['Nom_Offre'] ?></h2>
												<i><h4 class="post-author">Proposée par <?php echo $Donnees['Nom_Entreprise'] ?></h4></i>
												<p class="post-description">Le <?php echo $d ?></p>
												
											</div>

									</div>
									</div>
									
									
										<?php
										$Compt++;			
								}
								
								else{
									?>
									
									 <div id=OffreMilieu class="wow animated fadeInLeft">
											<div class="single-blog two-column">
											<div class="post-thumb">
												<a href="pdf/Offres/<?php echo $Donnees['PDF'] ?>"><img src="images/Offres/<?php echo $Donnees['Logo']?>" width="300px"; height="100px"; alt=""></a>
											</div>
											<div class="post-content overflow">
												<h2 class="post-title bold"><?php echo $Donnees['Nom_Offre'] ?></h2>
												<i><h4 class="post-author">Proposée par <?php echo $Donnees['Nom_Entreprise'] ?></h4></i>
												<p class="post-description">Le <?php echo $d ?></p>
												
											</div>
											</div>
									</div>
									</div>
										<?php
										$Compt=0;			
								}							
								} ?>
					<div id=Pages class="blog-pagination">
                        <ul class="pagination">
						<?php
						for($i=0;$i<=$TotalPages;$i++)
						{
						?>
						
						<li><a href="AnnonceOL.php?page=<?php echo $i ?>"><?php echo $i ?></a></li> 

						<?php } ?>
                        </ul>
						</div>
                    </div>
                 </div>
                
            </div>
        </div>
    </section>

    <!--/#blog-->

    <?php include('footerOL.php'); ?>

    <script>!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
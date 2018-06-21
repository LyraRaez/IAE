				<?php include('Include_Index/Connexion_Base.php'); ?>
				<div id="Adherer" align=center style="width:100%; padding:30px; background-color: #F4F4F4;" class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="700ms">
				  <h1 id="PqAdherer">POURQUOI ADH&#201;RER ?</h1><br>
				  
							<?php
							$Requete = "select Message, Lien_PDF from ADHESION;";
							$Resultat = $Base->query($Requete); $Afficher = $Resultat->fetch();
							if(count($Afficher)>0) { echo $Afficher['Message']; $PDF = $Afficher['Lien_PDF']; }
							?>
								
								<br><br><br>
						<a href="PDF/Adhesion/<?php echo $PDF ?>" target="_blank" >T&eacute;l&eacute;charger ici la pr&eacute;sentation de notre Association (.Pdf)</a>			
				</div>
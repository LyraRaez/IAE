				<?php include('Include_Index/Connexion_Base.php'); ?>
				<div id="MotPres" style="padding:30px; background-color: #85afc7;" class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
					<div>
					<div id="President" style="padding:30px;" class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<center>
						
							<?php
							$Requete = "select Nom, Fonction, LienPhoto from MOTPRESIDENT;";
							$Resultat = $Base->query($Requete); $Afficher = $Resultat->fetch();
							if(count($Afficher)>0) { $Nom = $Afficher['Nom']; $Fct = $Afficher['Fonction']; $Image = "IMAGES/President/".$Afficher['LienPhoto']; }
							?>
						
						<img id=PdpPresident src="<?php echo $Image ?>" width="150px" height="150px"/><br><br id=Resp>
						<img id=SeparateurP src="IMAGES/separateurpdp.png" width="200px";/><br id=Resp><br id=Resp>
						
						<i><b><?php echo $Nom ?></b>, <?php echo $Fct ?></i>
						</center>
					</div>
					</div>
					
					<div id="MessagePresident" style="padding:20px;" align=left class="title wow fadeInDown" data-wow-duration="500ms" data-wow-delay="560ms">
					
						<img src="IMAGES/G1.png" width="40px" id="PremG"/><p id="Message">
						
							<?php
							$Base=new PDO('mysql:host=localhost;dbname=IAE;charset=utf8', 'root', 'root'); $Requete = "select Message from MOTPRESIDENT;";
							$Resultat = $Base->query($Requete); $Afficher = $Resultat->fetch();
							if(count($Afficher)>0) { echo $Afficher['Message']; }
							?>
								&nbsp;<img src="IMAGES/G2.png" width="25px"/></p>
						
					</div>
					
				</div>
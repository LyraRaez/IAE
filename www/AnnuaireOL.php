<?php include('headerOL.php'); ?>
					<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>

<head>
    <link href="css/main666.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">
</head>


    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div id="searchbar" align="center">
                        <form action="AnnuaireOL.php" class="formulaire" method="post"><br><br>

                      <div style="margin-left:-200px; margin-top:-20px"> <p>Par nom :</p> <input class="champ" name="Nom" type="text" placeholder="Saisir un nom"/> </div>
 							
									<div style="margin-left:120px; margin-top:-54px"> <p>Diplôme :</p>
									<SELECT name="Diplome" size="1">
									<option>Diplôme</option>
									<?php $Requete = "SELECT ID_Diplome, Nom_Diplome FROM DIPLOME";
								   $Resultat = $Base->query($Requete);
								   while($Donnees = $Resultat->fetch()) 
								   { ?>
									<option value="<?php echo $Donnees['Nom_Diplome'] ?>"><?php echo $Donnees['Nom_Diplome'] ?></option>   
								   <?php } ?>
									</SELECT>
									</div>
											<br>				 
									
							<button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Rechercher</button>
							</form>			
                </div>
							
				<?php if((!isset($_POST['Nom']) && !isset($_POST['Diplome'])) || !isset($_POST)) { ?>
							
							
					<?php
					$MembresParPage = 18;
					$MembresTotauxReq = $Base->query('SELECT * FROM MEMBRE');
					$MembresTotaux = $MembresTotauxReq->rowCount();
					$TotalPages = ceil($MembresTotaux/$MembresParPage) + 1;
					
					if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
					{
						$_GET['page'] = intval($_GET['page']);
						$PageCourante = $_GET['page'];
					}
					else{ $PageCourante = 1; }
					$Depart = ($PageCourante-1)*$MembresParPage;
					
					?>


							
                <br><br>
				
				
                <div class="portfolio-items">
                    <table>
                    <tr>
					
					<?php $Requete = "SELECT ID_Profil, Nom, Prenom, Sexe, DateInscription, PhotoProfil FROM MEMBRE ORDER BY DateInscription DESC LIMIT ".$Depart.','.$MembresParPage;
					$Resultat = $Base->query($Requete);
					$Compteur = 0;
					while($Donnees = $Resultat->fetch()) 
					 { ?>
					
                        <td><img src = "images/profil/<?php echo $Donnees['PhotoProfil'] ?>" style="width:180px; height:180px;"><br><p></p>
                            <font size="3"><b><?php echo $Donnees['Nom']." ".$Donnees['Prenom'] ?></font></b><br>
                            <font size="2">Membre depuis <?php $dateStr = new DateTime($Donnees['DateInscription']);
							$result = $dateStr->format('d/m/Y'); echo $result; ?><br></font>
                            <a target="_blank" href="VisualiserProfil.php?page=<?php echo $Donnees['ID_Profil']; ?>"><font size="2" color="red"><b><u>Voir le profil</u></b></a></font>
                        </td>
						
					 <?php
					 $Compteur++;
					 if($Compteur==6){ ?>
					</tr>
                    <tr> <?php
					$Compteur = 0;
					 }

					 } ?>	
					</tr>
                </table>
                </div>

				<center>
					<div id=Pages class="blog-pagination">
                        <ul class="pagination">
						<?php
						for($i=0;$i<=$TotalPages;$i++)
						{
						?>
						
						<li><a href="AnnuaireOL.php?page=<?php echo $i ?>"><?php echo $i ?></a></li> 

						<?php } ?>
                        </ul>
						</div>
						
				<?php } 
			else
			{
				if(isset($_POST['Nom']) && $_POST['Diplome'] == "Diplôme")
				{ 
					$MembresParPage = 18;
					$MembresTotauxReq = $Base->query("SELECT * FROM MEMBRE WHERE Nom LIKE '".$_POST['Nom']."' OR Prenom LIKE '".$_POST['Nom']."' ");
					$MembresTotaux = $MembresTotauxReq->rowCount();
					$TotalPages = ceil($MembresTotaux/$MembresParPage) + 1;
					
					if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
					{
						$_GET['page'] = intval($_GET['page']);
						$PageCourante = $_GET['page'];
					}
					else{ $PageCourante = 1; }
					$Depart = ($PageCourante-1)*$MembresParPage;
					
					$Requete = "SELECT ID_Profil, Nom, Prenom, Sexe, DateInscription, PhotoProfil FROM MEMBRE WHERE Nom LIKE '".$_POST['Nom']."' OR Prenom LIKE '".$_POST['Nom']."' ORDER BY DateInscription DESC LIMIT ".$Depart.','.$MembresParPage;
				}
				
				if($_POST['Nom'] == "" && $_POST['Diplome'] != "Diplôme")
				{
					
					$MembresParPage = 18;
					$MembresTotauxReq = $Base->query("SELECT * FROM membre, diplome, obtentiondiplome WHERE Nom_Diplome = '".$_POST['Diplome']."' AND Diplome.ID_Diplome = obtentiondiplome.ID_Diplome AND obtentiondiplome.ID_Profil = membre.ID_Profil");
					$MembresTotaux = $MembresTotauxReq->rowCount();
					$TotalPages = ceil($MembresTotaux/$MembresParPage) + 1;
					
					if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
					{
						$_GET['page'] = intval($_GET['page']);
						$PageCourante = $_GET['page'];
					}
					else{ $PageCourante = 1; }
					$Depart = ($PageCourante-1)*$MembresParPage;
					$Requete = "SELECT ID_Profil, Nom, Prenom, Sexe, DateInscription, PhotoProfil FROM MEMBRE, diplome, obtentiondiplome WHERE Nom_Diplome = '".$_POST['Diplome']."' AND Diplome.ID_Diplome = obtentiondiplome.ID_Diplome AND obtentiondiplome.ID_Profil = membre.ID_Profil ORDER BY DateInscription DESC LIMIT ".$Depart.','.$MembresParPage;
				}

				if($_POST['Nom'] != "" && $_POST['Diplome'] != "Diplôme")
				{
					
					$MembresParPage = 18;
					$MembresTotauxReq = $Base->query("SELECT * FROM MEMBRE, diplome, obtentiondiplome WHERE Nom LIKE '".$_POST['Nom']."' OR Prenom LIKE '".$_POST['Nom']."' AND Nom_Diplome = '".$_POST['Diplome']."' AND Diplome.ID_Diplome = obtentiondiplome.ID_Diplome AND obtentiondiplome.ID_Profil = membre.ID_Profil");
					$MembresTotaux = $MembresTotauxReq->rowCount();
					$TotalPages = ceil($MembresTotaux/$MembresParPage) + 1;
					
					if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
					{
						$_GET['page'] = intval($_GET['page']);
						$PageCourante = $_GET['page'];
					}
					else{ $PageCourante = 1; }
					$Depart = ($PageCourante-1)*$MembresParPage;
					
					$Requete = "SELECT ID_Profil, Nom, Prenom, Sexe, DateInscription, PhotoProfil FROM MEMBRE, diplome, obtentiondiplome WHERE Nom LIKE '".$_POST['Nom']."' OR Prenom LIKE '".$_POST['Nom']."' AND Nom_Diplome = '".$_POST['Diplome']."' AND Diplome.ID_Diplome = obtentiondiplome.ID_Diplome AND obtentiondiplome.ID_Profil = membre.ID_Profil ORDER BY DateInscription DESC LIMIT ".$Depart.','.$MembresParPage;
				}
				
				?>

				<div class="portfolio-items">
                    <table>
                    <tr>
					
					<?php
					$Resultat = $Base->query($Requete);
					$Compteur = 0;
					while($Donnees = $Resultat->fetch()) 
					 {  ?>
					
                        <td><img src = "images/profil/<?php echo $Donnees['PhotoProfil'] ?>" style="width:180px; height:180px;"><br><p></p>
                            <font size="3"><b><?php echo $Donnees['Nom']." ".$Donnees['Prenom'] ?></font></b><br>
                            <font size="2">Membre depuis <?php $dateStr = new DateTime($Donnees['DateInscription']);
							$result = $dateStr->format('d/m/Y'); echo $result; ?><br></font>
						<a target="_blank" href="VisualiserProfil.php?page=<?php echo $Donnees['ID_Profil']; ?>"><font size="2" color="red"><b><u>Voir le profil</u></b></a></font>
                        </td>
						
					 <?php
					 $Compteur++;
					 if($Compteur==6){ ?>
					</tr>
                    <tr> <?php
					$Compteur = 0;
					 }

					 } ?>	
					</tr>
                </table>
                </div>
					
										<div id=Pages class="blog-pagination">
                        <ul class="pagination">
						<?php
						for($i=0;$i<=$TotalPages;$i++)
						{
						?>
						
						<li><a href="AnnuaireOL.php?page=<?php echo $i ?>"><?php echo $i ?></a></li> 

						<?php } ?>
                        </ul>
						</div>
					
				<?php } ?>
						
        </div>
		</center>      
    </section>
    <!--/#portfolio-->

    <?php include('footer.php'); ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>

<?php date_default_timezone_set('UTC'); ?>
<?php include('headerOL.php'); ?>
<link href="css/cal.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
    <!--/#page-breadcrumb-->	
	<section id=portfolio>
	<br><br><br><br><br><br>
	  <div class="table-container">
			<table class="calendrier">
				<tbody>
					<tr>
					
					<?php
						$Requete = "SELECT Nom, Date, PDF from EVENEMENT WHERE Date >= CURRENT_DATE  ORDER BY Date";
						$Resultat = $Base->query($Requete);
						$Compteur=0;
						while($Donnees = $Resultat->fetch()) { 
							$dateStr = new DateTime($Donnees['Date']);
							$result = $dateStr->format('d / m / Y');
							$Compteur++;?>
				
						<td>
						<p><u><?php echo $result ?></u><br><?php echo $Donnees['Nom'] ?></p>
						<a href="pdf/Evenements/<?php echo $Donnees['PDF'] ?>" target="blank"><img class="image_info" src="images/calendrier/information.png" alt="Info" title="Cliquez pour voir l'évenement" /></a>
						</td>
						
					<?php
					if($Compteur >= 6){
						?>
					</tr>
					
					<tr>
						
					<?php
					$Compteur=0;
					} ?>
						
						<?php  } ?>	
					</tr>
					
				</tbody>
			</table>
		</div>
			<br><br><br><br><br><br>
	</section>
                
<?php include('footer.php'); ?>
</body>
</html>
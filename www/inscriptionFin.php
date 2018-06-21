<?php session_start();?>
<?php include('headerHL.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<div id="InscriptionReçue" align=center style="width:100%; padding:30px; background-color: #F4F4F4;" class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="700ms">
			<p>Votre demande d'inscription a bien été prise en compte, vous recevrez un email de confirmation dans les jours suivant aprés réglement de votre cotisation, pour activé votre compte. </p><br>
	
	<?php 
	if($_SESSION['cotisation']=="Master"){
			echo("<a href =\"https://www.paypal.me/AMaugy/20\" target = \"blank\">Payer ma cotisation</a><br>");
	}
	else{
		if($_SESSION['cotisation']=="New"){
				echo("<a href =\"https://www.paypal.me/AMaugy/15\" target = \"blank\">Payer ma cotisation</a><br>");
		}
		else{
			if($_SESSION['cotisation']=="Etudiant"){
					echo("<a href =\"https://www.paypal.me/AMaugy/5\" target = \"blank\">Payer ma cotisation</a><br>");
			}
			else{
				if($_SESSION['cotisation']=="Partenaire"){
						echo("<a href =\"https://www.paypal.me/AMaugy/20\" target = \"blank\">Payer ma cotisation</a><br>");
				}
			}
		}
	}
	?>	
	</div>
		<br>
	</section>
		<!--/#company-information-->

		<?php include('footer.php'); ?>   
	   
	</body>
</html>
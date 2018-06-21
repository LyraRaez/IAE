<?php include('headerHL.php'); ?>
<!DOCTYPE html>
<html lang="en">

	<section id="contact" class="choose">
		<style>
		label1
		{
			display: block;
			width:  250px;
			float: left;
			margin-top: 2px;" 
				font-family: 'Roboto Slab', serif;
		}
		label2
		{
			display: block;
			width:  250px;
			float: left;
			margin-top: 2px;" 
		}
		input
		{
			margin-top: 2px;" 
		}
		</style>
		<form id=FormInscr action="verifinscription.php" method="post">
			<div style="margin : 15px; float:right; width: 69%;border-left:1px solid black; height:58%;">
				<center>
					<h3>Concernant la cotisation</h3>

					<p> <br>


					Veuillez cocher la bonne option avant de procéder au paiement via Paypal<br>

					<hr style="width:90%; color:black; background-color:black; height:1px;" />
					<ul style="list-style-type:none">
						<div style="text-align: left; margin: 10px">
							<p>Cotisation :*</p>
							<input type="radio" name="ChoixDiplome" value="Master" checked="check">Je suis diplômé(e) de Licence ou de Master 2 de l’IAE d’Amiens, des antennes de Beauvais ou
							de Saint-Quentin : Le montant de la cotisation est de 20 € pour une adhésion individuelle.<br><br>
							<input type="radio" name="ChoixDiplome" value="New">Je suis nouveau diplômé(e) 2017 de Licence ou Master 2 de l’IAE d’Amiens des antennes de
							Beauvais ou de Saint-Quentin : Le montant de la cotisation est de 15 € pour une adhésion
							individuelle « nouveau diplômé ».<br><br>
							<input type="radio" name="ChoixDiplome" value="Etudiant">Je suis étudiant de Licence ou Master de l’IAE d’Amiens Beauvais ou St Quentin : le montant
							est de 5€ pour un adhésion comme adhérent junior.<br><br>
							<input type="radio" name="ChoixDiplome" value="Partenaire">Je suis partenaire de l’IAE d’Amiens-Picardie, professeur, ancien professeur, représentant
							d’entreprise et je souhaite être membre d’honneur : le montant de la cotisation est de 20 €
							pour une adhésion individuelle.<br><br>
							<button type="submit" id=ValiderProfil style="margin-left:0; border-left:0;">
					<center>
						<b><font color=black>VALIDER</font></b>
						</center>
					</button>
						</div>
					</ul>
				</center>
			</div>
			<div style="text-align:left; margin-left : 70px;"><br>
				Coordonnées personnelles :<br><br>
				<label1 for="nom">Nom*</label1><input type="text" id="nom" name="Nom" required="required" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label1 for="prenom">Prénom*</label1><input type="text" id="prenom" name="Prenom" required="required" onfocus="this.value ='';" onchange="verifForm();"><br>
				Sexe* :<br><input type="radio" name="sexe" id="sexe" value="homme" checked="check">Homme <input type="radio" name="sexe" id="sexe" value="Femme">Femme<br>
				<label2 for="nom">E-mail perso*</label2><input type="text" id="mail perso" name="MailPerso" required="required" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label2 for="nom">Adresse*</label2><input type="text" id="Adresse perso" name="adressePerso" onfocus="this.value ='';" required="required" onchange="verifForm();"><br>
				<label2 for="nom">Ville*</label2><input type="text" id="ville perso" name="villePerso" onfocus="this.value ='';" required="required" onchange="verifForm();"><br>
				<label2 for="nom">Code Postal*</label2><input type="text" id="code postal" name="codePostal" required="required" onfocus="this.value ='';" onchange="verifForm();"><br>


				<small><i> * champs obligatoire</i></small><br><br><br><br><br><br><br><br>
			</div>
		</form>
		<br>
	</section>
		<!--/#company-information-->

		<?php include('footer.php'); ?>   
	   
	</body>
</html>

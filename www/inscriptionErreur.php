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
		<form action="verifinscription.php" method="post">
			<div style="margin : 15px; float:right; width: 69%;border-left:1px solid black; height:58%;">
				<center>
					<h3>Concernant la cotisation</h3>

					<p> <br><br>

					Les éléments et questions en rapport avec la cotisation afin de finaliser vôtre inscription sont expliqués dans le PDF suivant : <a href ="PDF/bulletin d'adhésion 2017-2018.pdf" target = "blank">PDF Adhésion</a><br><br>

					Veuillez cocher la bonne option avant de procéder au paiement via Paypal<br><br>

					<hr style="width:90%; color:black; background-color:black; height:1px;" />

					<SCRIPT LANGUAGE="JavaScript">
						/*Fonction verifier formulaire* bloque le bouton si tous les champs ne sont pas rempli*/
						/*function verifForm()
						{
							if(document.getElementById('identifiant').value !='' && document.getElementById('identifiant').value!='' && document.getElementById('identifiant').value !='Identifiant...' && document.getElementById('identifiant').value != 'Code secret...')
							{
								document.getElementById('button').disabled=false;
						 
							}
							else
							{
								document.getElementById('button').disabled=true;
							}
						}*/
					</script>


					<ul style="list-style-type:none">
						<div style="text-align: left; margin: 10px">
							<p><font color="#BB2222">Cotisation :*</font></p><br>
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
							<input type="submit" value="Confirmer" name="button"></input>
						</div>
					</ul>
				</center>
			</div>
			<div style="text-align:left; margin : 15px;">
				Coordonnées personnelles :<br><br>
				<label1 for="nom"><font color="#BB2222">Nom*</font></label1><input type="text" id="nom" name="Nom" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label1 for="prenom"><font color="#BB2222">Prénom*</font></label1><input type="text" id="prenom" name="Prenom" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label1 for="sexe"><font color="#BB2222">Sexe*</font></label1><input type="radio" name="sexe" id="sexe" value="homme" checked="check">Homme <input type="radio" name="sexe" id="sexe" value="Femme">Femme<br>
				<label2 for="nom"><font color="#BB2222">e-mail perso*</font></label2><input type="text" id="mail perso" name="MailPerso" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label2 for="nom"><font color="#BB2222">Adresse*</font></label2><input type="text" id="Adresse perso" name="adressePerso" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label2 for="nom"><font color="#BB2222">Ville*</font></label2><input type="text" id="ville perso" name="villePerso" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label2 for="nom"><font color="#BB2222">Code Postal*</font></label2><input type="text" id="code postal" name="codePostal" onfocus="this.value ='';" onchange="verifForm();"><br>
				<label2 for="Type de Contrat">Année d'obtention du diplôme</label2>
				<select name="obtention">
				   <option>1990</option>
				   <option>1991</option>
				   <option>1992</option>
				   <option>1993</option>
				   <option>1994</option>
				</select><br>
				<label2 for="nom">Nom du diplôme</label2><input type="text" id="nomDiplome" name="nomDiplome"><br>
								<label2 for="newsletter"> S'inscrire à la Newsletter </label2><input type="radio" name="newsletter"><br><br>
				Coordonées professionnelles(optionel) : <br><br>
				<label1 for="prenom">Entreprise</label1><input type="text" id="Entreprise" name="Entreprise"><br>
				<label1 for="prenom">Fonction</label1><input type="text" id="Fonction" name="FonctionEntreprise"><br>
				<label2 for="nom">e-mail pro</label2><input type="text" id="mail pro" name="mailPro"><br>
				<label1 for="prenom">Adresse de l'entreprise</label1><input type="text" id="Adresse de l'entreprise" name="AdresseEntreprise"><br>
				<label1 for="prenom">Ville</label1><input type="text" id="Ville" name="villeEntreprise"><br>
				<label1 for="prenom">Code Postal</label1><input type="text" id="CodePostal" name="CodePostalEntreprise"><br>
				<label1 for="prenom">Téléphone</label1><input type="text" id="Teléphone" name="TelephoneEntreprise"><br><br>
				<small><i><font color="#BB2222"> * champs obligatoire</font></i></small>
			</div>
		</form>
		<br>
	</section>
		<!--/#company-information-->

		<?php include('footer.php'); ?>   
	   
	</body>
</html>

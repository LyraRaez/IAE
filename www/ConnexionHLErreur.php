<?php include('headerHL.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil | IAE Amiens</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/indexcss.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

</head>

<body>
   <section id="contact" >
   <center>
						<div id=Connexion style="width:50%; height:30%;"><br>
							<h3>Connexion</h3>
							<form action="ConnexionHLVerif.php" method="post">
								<div class="input-field">
									<input type="text" name="email" class="form-control" placeholder="Adresse mail">
								</div>
								<div class="input-field">
									<input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
								</div><br>
								
						       	<input type="submit" value="Connexion" />
							</form>
			
				</div>
						<br><font id=Adherer color=red>Erreur : L'Email ou le mot de passe sont incorrects.</font><br>
						
			</section>
	</center>

    <!--/#footer-->
     <?php include('footer.php'); ?>
</body>
</html>
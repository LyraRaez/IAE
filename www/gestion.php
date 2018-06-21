<?php
include('headerOL.php');
include('Include_Index/Connexion_Base.php');
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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

<html lang="en">
    <!--/#action-->
    <div id="Actualités" style="width:100%; padding:30px; background-color: #85afc7;">
    <section>
				
				<?php include('Include_Gestion/MotPresident.php'); ?>
                <?php include('Include_Gestion/IconeEtLogo.php'); ?>
				<?php include('Include_Gestion/Membre.php'); ?>
				<?php include('Include_Gestion/Article.php'); ?>
                <?php include('Include_Gestion/Evenement.php'); ?>
                <?php include('Include_Gestion/Sponsors.php'); ?>
				<?php include('Include_Gestion/Offres.php'); ?>
				<?php include('Include_Gestion/Diplomes.php'); ?>
				<?php include('Include_Gestion/Emails.php'); ?>
				<?php include('Include_Gestion/Image.php'); ?>
				<?php include('Include_Gestion/Categorie.php'); ?>
				<br><br><br><br>    
    </section>

    <!--/#blog-->

    <?php include('footer.php'); ?>
</body>
</html>
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IAE Amiens</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main666.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/Responsive_Design.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/ico/logo_iae_asso_1.ico">
	<?php include('Include_Index/Ico.php'); ?>
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
		
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://fr-fr.facebook.com/Association-des-Dipl%C3%B4m%C3%A9s-de-lIAE-dAmiens-558335490854877/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/iaeamiensnews"><i class="fa fa-twitter"></i></a></li>
							<li><a href="AchatOL.php"><img src="images/panier.png" alt="commande" width="18"></a></li>
                        </ul>
					</div>

                    <a class="navbar-brand"  href="indexOL.php">
                        <h1><img id="Logo_Menu" src="images/Logo_Icone/<?php echo $Logo ?>" alt="logo"></h1>
                    </a>
					<br>
					
				<?php if($_SESSION == null) { header('Location: ConnexionHL.php'); } ?>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="indexOL.php">Accueil</a></li>
                        <li><a href="actualitesOL.php">Articles</a></li>

								<?php if($_SESSION['Admin'] == 1){ ?>
								<li><a href="gestion.php">Administration</a></li>      
								<?php } ?>
								                        <li class="dropdown"><a href="#">Menu<i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                                <li><a href="PhotoOL.php">Galerie Photo</a></li>
                                <li><a href="agendaOL.php">Agenda</a></li>
                                <li><a href="annuaireOL.php">Annuaire</a></li>
                                <li><a href="annonceOL.php">Offres et Emplois</a></li>

                            </ul>
                        </li>                  
                        <li class="dropdown"><a href="#"><?php echo $_SESSION['Nom']." ".$_SESSION['Prenom']; ?><i class="fa fa-angle-down"></i></a>
                        	<ul role="menu" class="sub-menu">
                        		<li><a href="Profil.php ">Paramètre du compte</a></li>
                        		<li><a href="Deconnexion.php ">Deconnexion</a></li>                       
                    </ul>
                </div>

            </div>
			</div>
        </div>
    </header>
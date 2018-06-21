 <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/main2.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/indexcss.css" rel="stylesheet">
</head>

<footer id="footer">
<div id="Footer" style="width:100%; padding:30px; background-color: #85afc7;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                   
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="contact-info bottom">

                        <h2>Adresse</h2>
                        <address>
                        Pôle universitaire Cathédrale <br> 
                        10 Venelle Lafleur <br> 
                        80000 Amiens <br> 
                        France <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Envoyer un message</h2>
                        <form name="contact-form" method="post" action="Include_Index/Script_Contact.php">
                            <div class="form-group">
                                <textarea type="text" name="name" class="form-control" required="required" rows="1"><?php echo $_SESSION['Nom']." ".$_SESSION['Prenom']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <textarea type="email" name="email" class="form-control" required="required" rows="1" ><?php echo $_SESSION['CurrentEmail'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="required" class="form-control" rows="8" placeholder="Que voulez-vous nous dire ?"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Newsletter</h2>
                        <form name="contact-form" method="post" action="Include_Index/Script_Newsletter.php">
                            <div class="form-group">
                            <textarea type="email" name="email" class="form-control" required="required" rows="1" ><?php echo $_SESSION['CurrentEmail'] ?></textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="S'inscrire">
                            </div>
                    </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>© IAE Association des diplômés 2017.Tous droits réservés.</p>
                        <p></a></p>

						
                    </div>
                </div>
            </div>
        </div>
    </footer>    
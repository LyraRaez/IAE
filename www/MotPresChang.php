<?php
include('header_admin.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil | IAE Amiens</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/indexcss.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet"> 
    <link href="../css/lightbox.css" rel="stylesheet"> 
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/indexcss.css" rel="stylesheet">
    <link href="../css/indexcss.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

</head>

<html lang="en">
    <!--/#action-->
    <div id="Actualités" style="width:100%; padding:30px; background-color: #85afc7;">
    <section>
							<?php
							$mot = $_POST['description_mot'];
							$Nom = $_POST['name_president'];
							$Fct = $_POST['name_fonction'];
							$PdP = "C:\UwAmp\www\images\MotPresident".$_POST['pic_president'];
							
							$dbname='Base'; 
							$Base=new SQLite3($dbname); 
							
							$Requete = "UPDATE MOTPRESIDENT SET Message = '".htmlentities(stripslashes($mot) ,ENT_QUOTES,'UTF-8' )."'";
							$Resultat = $Base->query($Requete);
							$Requete = "UPDATE MOTPRESIDENT SET Nom = '".htmlentities(stripslashes($Nom) ,ENT_QUOTES,'UTF-8' )."'";
							$Resultat = $Base->query($Requete);
							$Requete = "UPDATE MOTPRESIDENT SET Fonction = '".htmlentities(stripslashes($Fct) ,ENT_QUOTES,'UTF-8' )."'";
							$Resultat = $Base->query($Requete);
							

							?>
							
                    <!--Modifier le mot du président -->
                    <div class="row">
                        <div class="col-md-5 wow animated fadeInRight">
                            <h3>Mot du président</h3>
                            <form action="MotPresChang.php" method="post" enctype="multipart/form-data">
                                <br>
                                <p><br></p>
                                <div class="input-field">
                                    <textarea type="text" name="description_mot" class="form-control" required="required" placeholder="Descriptif du mot du président"></textarea>
                                </div>
                                <br>
                                <button type="submit" id="upload_president" class="btn btn-blue btn-effect">Ajouter le fichier</button>
                            </form>
                        </div>
                        <br>
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">  
                            <h3> Modifier le president </h3>
                             <br>
                                <div class="input-field">
                                    <input type="text" name="name_president" class="form-control" required="required" placeholder="Modifier le nom du président">           
                                </div>
                                <p><br></p>
                                <div class="input-field">
                                    <input type="file" name="pic_president" class="form-control" required="required" placeholder="Sélectionnez la photo">
                                </div>
                                <p><br></p>
                        </div>

                    </div>
                    <br>
                    <!--Modifier logo et/ou image du site-->
                    <div class="row">
                        <div class="col-md-5 col-sm-12 wow animated fadeInRight">
                            <h3>Changer le logo du site</h3>
                             <form action="#" method="post" enctype="multipart/form-data">
                                <br>
                                    <div class="input-field">
                                        <input type="file" name="pic_IAE" class="form-control" required="required" placeholder="Changer l'image">
                                    </div>
                                <br>
                                    <div class="input-field">
                                        <input type="file" name="icone_IAE" class="form-control" required="required" placeholder="changer l'icône">
                                    </div>
                                <br>
                                <button type="submit" id="upload_pic" class="btn btn-blue btn-effect"> Changer l'image</button>
                             </form>
                        </div>
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3> Modification de l'adhésion</h3>
                            <textarea type="text" name="why_add" class="form-control" required="required" placeholder="Description de l'article"></textarea>
                            <br>
                            <button type="submit" id="maj_why_add" class="btn btn-blue btn-effect"> Modifier la présentation</button>
                        </div>
                    </div>
                    <!--Actualités et autres -->
                    <div class="row">
                        <div class="col-md-5 wow animated fadeInRight">
                            <h3>Ajouter le fichier</h3>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <p> Choissiez un lieu d'enregsitrement
                                    <select name="lieu d'neregistrement">
                                        <option> Actualités </option>
                                        <option> Offres </option>
                                        <option> Photo</option>
                                        <option> Sponsor</option>
                                    </select>
                                    <p>
                                </div>
                                <br>
                                <div class="input-field">
                                    <input type="file" name="fichier" class="form-control" required="required" placeholder="Sélectionnez le fichier">
                                </div>
                                <p><br></p>
                                <div class="input-field">
                                    <input type="text" name="nom" class="form-control" required="required" placeholder="Nom de l'article">
                                </div>
                                <p><br><p>
                                <div class="input-field">
                                    <textarea type="text" name="description" class="form-control" required="required" placeholder="Description de l'article"></textarea>
                                </div>
                                <p><br><p>
                                <div class="input-field">
                                    <input name="keywords" class="form-control" required="required" placeholder="Mot clé">
                                </div>
                                <p><br><p>
                                <button type="submit" id="upload_fichier" class="btn btn-blue btn-effect">Ajouter le fichier</button>
                            </form>
                        </div>
                        <div class="col-md-5 col-sm-12 wow animated fadeInLeft">
                            <h3> Ajouter une image </h3>
                                <div class="input-field">
                                    <input type="file" name="miniature" class="form-control" required="required" placeholder="Ajouter une image">
                                    <!--<input type="submit" name="submit" class="btn btn-submit" value="Parcourir..." onclick="document.location.href='AddActu.php';"">-->             
                                </div>
                        </div>
                    </div>   
                    <br>
                    <!--Evenement-->
                    <div class="row">
                        <div class="col-md-5 wow animated fadeInRight">
                            <h3> Ajouter un nouvel événement </h3>
                                <div class="input-field">
                                    <input type="text" name="nom_evenement" class="form-control" requiered="required" placeholder="Nom de l'événement">
                                </div>
                                <br>
                                <div class="input-field">
                                    <input type="text" name="date de l'évenement" class="form-control" required="required" placeholder="Date de l'évenement">
                                </div>
                                <br>
                                <div class="input-field">
                                    <input type="file" name="fichier_evenement" class="form-control" required="required" placeholder="Fichier de l'évenement">
                                </div>
                                <br>
                                <div class="input-field">
                                    <button type="submit" id="upload_event" class="btn btn-blue btn-effect">Ajouter l'évenement</button>
                                </div>
                        </div>
                    </div>
                    <br>
                    <!--Suppression-->   
                    <div class="row">
                        <div class="col-md-5 wow animated fadeInRight">
                            <h3>Suppression</h3>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <p> Choissiez ce que vous souhaitez supprimer</p>
                                    <select name="lieu d'neregistrement">
                                        <option> Article </option>
                                        <option> Offre d'emplois </option>
                                        <option> Photo </option>
                                        <option> Sponsor </option>
                                        <option> Evenement </option>
                                    </select>
                                    <p>
                                </div>
                                    <select name="listbox_actu_suppr" size="7" >
                                    <option value="Option 1" selected>Option 1</option>
                                    <option value="Option 2">Option 2222222222222222222</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                    <option value="Option 5">Option 5</option>
                                    </select>
                              
                                <br>
                            <button type="submit" id="upload" class="btn btn-blue btn-effect">Supprimer</button>   
                        </div>  
                    </div>       
    </section>

    <!--/#blog-->

    <?php include('footer.php'); ?>

    <script>!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
<?php 
    include('headerOL.php'); 

    $extention_ok=array('.pdf','.PDF');
    if(!empty($_FILES)){
        $file_name=$_FILES['fichier']['name'];
        $file_extension=strrchr($file_name,".");


        $file_tmp_name=$_FILES['fichier']['tmp_name'];
            
        $file_dest='pdf/'.$file_name;


        if(in_array($file_extension, $extention_ok)){
            if(move_uploaded_file($file_tmp_name, $file_dest)){
                echo 'fichier envoyé avec succès';
            }else{
                echo'ERREUR! ERREUR! ERREUR!';
            }

        }else{
            echo'Seul les fichiers pdf sont autorisé';
        }


     

    }

?>
<!DOCTYPE html>
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
    <link href="css/indexcss.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">

</head>


<html lang="en">
    <!--/#action-->
    <div id="Actualités" style="width:100%; padding:30px; background-color: #85afc7;">
    <section>
		
                	<div class="row">
						<div class="col-md-5 wow animated fadeInRight">
                            <h3>Ajouter le fichier</h3>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="input-field">
                                    <p> Choissiez un lieu d'enregsitrement
                                    <select name="lieu d'neregistrement">
                                        <option> Actualités </option>
                                        <option> Offres </option>
                                        <option> Mot du président</option>
                                        <option> Photo</option>
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
                                <button type="submit" id="upload" class="btn btn-blue btn-effect">Ajouter le fichier</button>
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
<?php include('headerOL.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <section id="contact" >
				<div class="container">
					<div class="row">
						<div class="col-md-5 wow animated fadeInRight">
                            <h3>Modifier les informations du compte</h3>
                            <form action="#" method="post">
                                <div class="input-field">
                                    <input type="text" name="name" class="form-control" placeholder="Nom">
                                </div>
                                <div class="input-field">
                                    <input type="text" name="surname" class="form-control" placeholder="Prénom">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" class="form-control" placeholder="Adresse mail">
                                </div>

                                <div class="input-field">
                                    <input name="password" class="form-control" placeholder="Mot de passe">
                                </div>
                               
								<div class="input-field">
                                    <input type="text" name="Numéro de téléphonne" class="form-control" placeholder="Numéro de téléphonne">
                                </div>
								<div class="input-field">
                                    <input type="text" name="Adresse" class="form-control" placeholder="Adresse">
                                </div>
								
								 <div class="input-field">
                                    <input type="text" name="Diplome" class="form-control" placeholder="Diplôme">
                                </div>
								<div class="input-field">
                                    <input type="text" name="Spécialité" class="form-control" placeholder="Spécialité">
                                </div>
                                <input type="button" value="Valider" onclick="document.location.href='indexOL.php';">
                                <!--<button type="submit" id="submit" class="btn btn-blue btn-effect">S'inscrire</button>-->
                            </form>
                        </div>
					</div>
				</div>          
    </section>

    <?php include('footerOL.php'); ?>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
   
</body>
</html>

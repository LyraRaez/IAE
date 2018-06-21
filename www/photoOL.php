<?php include('headerOL.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Bitter" rel="stylesheet">
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">Tout</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".SOIREE">Soirée Etudiants</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".DIPLOME">Diplômé</a></li>
                   <!-- <li><a class="btn btn-default" href="#" data-filter=".folio">Notre Porte Folio</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".logos">Nos Logos</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mobile">Mobile</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mockup">Maquette Numérique</a></li> -->
                </ul><!--/#portfolio-filter-->
                    
					<div id="slider">
					  <figure>
						<img src="../IMAGES/BU.jpg" alt>
						<img src="../IMAGES/logo.png" alt>
						<img src="../IMAGES/PDPPresident.png" alt>
						<img src="../IMAGES/photo.png" alt>
						<img src="../IMAGES/pdpvierge.png" alt>
					  </figure>
				</div>

                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->

    <?php include('footerOL.php'); ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>

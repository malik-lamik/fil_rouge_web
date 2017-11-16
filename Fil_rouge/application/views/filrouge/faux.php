!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<head>
	<title></title>
</head>
<body>
	<div id="fond">
		<?php require "entete.php" ?>

		<div class="corps">
			<div class="vide"></div>
				<div class="row" id="images">
					<div id="pub" class="col-xs-9">
						<a  href=""><img src="<?= base_url("images/pub.png")?>"></a>	
					</div>
					<div class="col-xs-3">
						<a  href=""><img id="banniere_droite" src="<?= base_url("images/banniere_droite.png")?>"></a>
					</div>					
					
				</div>
				<div class="vide"></div>

			<div id="banniere">
				<img id="banniere_centre" src="<?= base_url("images/banniere_centre.png")?>">
			</div>
			<div class="col-xs-12" ><h3><b>Nos catégories</b></h3></div>

			<div id="categorie">
				<a href=""><img id="categorieguitare" src="<?= base_url("images/guitare.png")?>"></a>
				<a href=""><img id="categoriebatterie" src="<?= base_url("images/batterie.png")?>"></a>
				<a href=""><img id="categoriepiano" src="<?= base_url("images/piano.png")?>"></a>
				<a href=""><img id="categoriemicro" src="<?= base_url("images/micro.png")?>"></a>
				<a href=""><img id="categoriesono" src="<?= base_url("images/sono.png")?>"></a>
				<a href=""><img id="categoriecases" src="<?= base_url("images/cases.png")?>"></a>
				<a href=""><img id="categoriecable" src="<?= base_url("images/cable.png")?>"></a>
				<a href=""><img id="categoriesaxo" src="<?= base_url("images/saxo.png")?>"></a>
			</div>

			<div class="vide">
				<div class="col-xs-6"><h3><b>Nos meilleurs ventes</b></h3></div>
				<div class="col-xs-6"><h3><b>Nos partenaires</b></h3></div>
			</div>			
			<div class="corps vide">
				<div class="col-xs-2 hauteur200 corps">
					<img class="top" id="topguitare" src="<?= base_url("images/topguitare.png")?>">
				</div>
				<div class="col-xs-2 hauteur200 corps" >
					<img class="top" id="topsaxo" src="<?= base_url("images/topsaxo.png")?>">
				</div>
				<div class="col-xs-2 hauteur200 corps" >
					<img class="top" id="toppiano" src="<?= base_url("images/toppiano.png")?>">
				</div>
				<div class="col-xs-3 hauteur200 corps" >
					<div><a href="http://fr.rolandce.com/"><img class="marque" src="<?= base_url("images/roland.jpg")?>"></a></div>
					<div><a href="http://fr.yamaha.com/fr/products/audio-visual/"><img class="marque" src="<?= base_url("images/yamaha.jpg")?>"></a></div>
				</div>
				<div class="col-xs-3 hauteur200 corps" >
					<div><a href="https://fr-fr.sennheiser.com/"><img class="marque" src="<?= base_url("images/sennheiser.jpg")?>"></a></div>
					<div><a href="https://www.music-group.com/brand/behringer/home"><img class="marque" src="<?= base_url("images/behringer.jpg")?>"></a></div>
				</div>
			</div>
				
		</div>
		<?php require "footer.php" ?>			
	</div>


</body>
</html>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/instrument_hover.js"></script>


<script>
	
</script>
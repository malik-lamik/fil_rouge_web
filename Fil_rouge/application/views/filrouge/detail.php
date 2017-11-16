
<body>
<div class="container"> 
	</br>
	</br>
	</br>
	
	<span class="col-md-2"><b>Nom</b></span> <?= $client->nom ?>
	</br>
	</br>
	<span class="col-md-2"><b>Prenom</b></span> <?= $client->prenom ?>
	</br>
	</br>
	<span class="col-md-2"><b>Adresse</b></span> <?= $client->adresse ?>
	</br>
	</br>
	<span class="col-md-2"><b>Adresse complementaire</b></span> <?= $client->ca ?>
	</br>
	</br>
	</br>
	<span class="col-md-2"><b>Code postal</b></span> <?= $client->code_postal ?>
	</br>
	</br>
	<span class="col-md-2"><b>Ville</b></span> <?= $client->ville ?>
	</br>
	</br>
	<span class="col-md-2"><b>Pays</b></span> <?= $client->pays ?>
	</br>
	</br>
	<span class="col-md-2"><b>Telephone</b></span> <?= $client->tel ?>
	</br>
	</br>
	<span class="col-md-2"><b>E-Mail</b></span> <?= $client->mail ?>
	</br>
	</br>
	<span class="col-md-2"><b>Mot de passe</b></span> <?= $client->mot_de_passe ?>
	</br>
	</br>

	<input type="hidden" name="id" value="<?= $client->id ?>"><br>
	<a href="<?= site_url("admin/index")?>">Retour à la liste</a>

	<a href="<?= site_url("admin/modif/")?><?= $client->id ?>"><button class="btn btn-success" type="submit">Modifier</button></a>

	<a href="<?= site_url("admin/script_supprim/")?><?= $client->id ?>"><button class="btn btn-danger" onclick="return confirm ('Voulez-vous vraiment supprimer ?');">Supprimer</button>

	
	</div>
</div>

</body>

	

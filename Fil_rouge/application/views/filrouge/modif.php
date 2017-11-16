
<div id="fond">
<div class="container">
<br/>
<br/>

	<form class="form-horizontal" action="http://127.0.0.1/php/Fil_rouge_web/index.php/admin/script_modif") id="modif" method="POST">

	<input type="hidden" name="id" value="<?= $client->id ?>"><br>

  <div class="form-group">
    <label class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nom" placeholder="Nom" id="nom_modif" value="<?= $client->nom ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prenom" placeholder="Prénom" id="prenom_modif" value="<?= $client->prenom ?>">
    </div>
  </div>
 <div class="form-group">
    <label class="col-sm-2 control-label">Adresse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="adresse" placeholder="Adresse" id="adresse_modif" value="<?= $client->adresse ?>">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Adresse complémentaire</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="ca" placeholder="Adresse complémentaire" id="ca_modif" value="<?= $client->ca ?>">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Code postal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="code_postal" placeholder="Code postal" id="code_postal_modif" value="<?= $client->code_postal ?>">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Ville</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ville" placeholder="Ville" id="ville_modif" value="<?= $client->ville ?>">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">Pays</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="pays" placeholder="Pays" id="pays_modif" value="<?= $client->pays ?>">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Telephone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control"  name="tel" placeholder="Telephone" id="tel_modif" value="<?= $client->tel ?>">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">E-Mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control"  name="mail" placeholder="Email" id="mail_modif" value="<?= $client->mail ?>">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="mot_de_passe" placeholder="Mot de passe" id="mdp_modif" value="<?= $client->mot_de_passe ?>">
    </div>
  </div>
<div class="text-center" id="alertage2"></div>

      <div id="boutonvalider">
      <a href="<?= site_url("admin/index")?>">Retour à la liste</a>
       <button class="text-center" id="modifier" type="button">Modifier</button>
      </div>
</div>

</form>
</div>





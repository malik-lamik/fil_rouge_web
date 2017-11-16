
<div id="fond">
<div class="container">
<br/>
<br/>

	<form class="form-horizontal" action="http://127.0.0.1/php/Fil_rouge_web/index.php/admin/script_ajout" id="ajout" method="POST">

  <div class="form-group">
    <label  class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom_ajout" name="nom" placeholder="Nom">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prenom" id="prenom_ajout" placeholder="Prénom">
    </div>
  </div>
 <div class="form-group">
    <label  class="col-sm-2 control-label">Adresse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="adresse" id="adresse_ajout" placeholder="Adresse">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">Adresse complémentaire</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="ca" id="ca_ajout" placeholder="Adresse complémentaire">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Code postal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="code_postal" id="code_postal_ajout" placeholder="Code postal">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Ville</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ville" id="ville_ajout" placeholder="Ville">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Pays</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="pays" id="pays_ajout" placeholder="Pays">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Telephone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control"  name="tel" id="tel_ajout" placeholder="Telephone">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">E-Mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control"  name="mail" id="mail_ajout" placeholder="Email">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="mot_de_passe" id="mdp_ajout" placeholder="Mot de passe">
    </div>
  </div>
<div class="text-center" id="alertage"></div>
      <div id="boutonvalider">
        <a href="<?= site_url("admin/index")?>">Retour à la liste</a>

       <button class="text-center" id="valider" type="button">Ajouter</button>
      </div>
</div>

</form>
</div>



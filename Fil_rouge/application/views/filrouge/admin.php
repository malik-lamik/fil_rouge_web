</br>
</br>
</br>
<div class="container">
	
	<h1>Liste des clients</h1>
	</br>
	</br>
	</br>
		<div class="col-md-1">
			<a href="<?= site_url("admin/ajout/")?>"><button class="btn btn-success" >Ajouter</button></a>
		</div>
	</br>
	</br>
	</br>
		<table class="table table-striped">
		 <tr>
					            	<th>Id</th>
					            	<th>Nom</th>
					            	<th>Prenom</th>
					            	<th>Adresse</th>					            	
					            	<th>Code postal</th>
					            	<th>Ville</th>					            	
					            	<th>E-Mail</th>
					            	<th>Details</th>
					            	
					            	
		</tr>

									<?php foreach ($admin as $row ): ?>

										<tr>
											<td><?= $row ->id ?></td>
											<td><?= $row ->nom; ?></td>
											<td><?= $row ->prenom ?></td>
											<td><?= $row ->adresse ?></td>										
											<td><?= $row ->code_postal ?></td>
											<td><?= $row ->ville ?></td>
											<td><?= $row ->mail ?></td>
											
											
											<td><a href="<?= site_url("admin/detail/")?><?= $row->id ?>"><button class="btn btn-info" type="submit">Détails</button></a></td>

																						
										</tr>
									<?php endforeach; ?>
		</table>
	
</div>



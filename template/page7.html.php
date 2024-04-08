<?php


// $totalPages = ceil($totalResults / $perPage);

// $currentpage = isset($_GET['pag']) ? $_GET['pag'] : 1;

// $offset = ($currentpage - 1) * $perPage;

// $results = range($offset + 1, min($totalResults, $offset + $perPage));
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/page7.css">
	<title>apprenant</title>
</head>

<body>
	<div class="promotions">
		<h2>Apprenants </h2>
		<span>promos* Liste * Détails * Apprenant</span>
	</div>
	<div class="container-top">
		<h3>Promotion: <span>Promotion 6</span></h3>
		<h3>Référentiel: <span>Dév Web / Mobile</span></h3>
	</div>

	<div class="containe">
		<span class="t1">1</span>
		<h3 class="">Apprenant</h3>
		<div class="title">
			<h2>Liste des apprenants <span style="color: #008F89;">(50)</span> </h2>
		</div>
		<div class="buttons">
			<a href="#demo" class="b1"><i class="fa-regular fa-add"></i> Nouveau</a> &nbsp; &nbsp;
			<a href="#demo2" class="b2">Insertion en masse</a>&nbsp; &nbsp;
			<a href="#demo3" class="b3"><i class="fa-regular fa-circle-down"></i> Liste model</a> &nbsp; &nbsp;
			<a href="#" class="b4">Liste des exclus</a> &nbsp; &nbsp;
		</div>
		<div class="filtre">
			<i class="fa-regular fa-add"></i><input type="text" class="search">
		</div>
		<div class="folder-icon">
			<i class="fa-regular fa-folder"></i>
		</div>
		<table class="table">
			<tr>

				<th>Image</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
				<th>Genre</th>
				<th>Téléphone</th>
				<th>Actions</th>

			</tr>
			<tbody>
				<?php foreach ($Allapprenants as $value) : ?>
					<?php for ($i = $debut; $i < $nepg; $i++) { ?>


						<tr>

							<td><i style="padding: 16%;border-radius: 25%; background-color: rgb(119, 236, 236);" class="fa-solid fa-user"></i></td>
							<th><?= @$value['firstName'] ?></th>
							<th><?= @$value['lastName'] ?></th>
							<th><?= @$value['email'] ?></th>
							<th><?= @$value['genre'] ?></th>
							<th><?= @$value['telephone'] ?></th>
							<th>Actions</th>
						</tr>
						<!-- <td>
	<i class="fa-regular fa-square"></i>
</td> -->



					<?php } ?>


				<?php endforeach; ?>


			</tbody>
		</table>

		<!--------- PAGINATION --------------------->

		<div class="pagination">
			<a href="#">&laquo;</a>
			<?php

			for ($i = 1; $i < 5; $i++) {
				echo "<a href='?pag=$i'>@$i </a>";
			}

			?>
			<a href="#">&raquo;</a>
		</div>
	</div>


	<!-- MODAL 1 SUIVANT -->
	<div id="demo1_suiv" class="modal">
		<div class="modal_content">
			<header class="modal-header">
				<h1>Nouvel Apprenant</h1>
			</header>
			<section>
				<div class="content">
					<div class="head">
						<div class="text">Nouvel Apprenant</div>
						<div style="color: gray;" class="croix"><i class="fa-solid fa-x"></i></div>
					</div>
					<div class="tete">
						<div class="pen"><i class="fa-solid fa-pen"></i></div>
						<div class="text">Information Perso.</div>
						<div class="barre"></div>
						<div class="deux"><i class="fa-solid fa-2"></i></div>
						<div class="text">Informations Supplementaires</div>
					</div>
					<div class="texte">
						<div class="text1">Nom & Prenom tuteur</div>
						<div class="text1">Contact Tuteur<span style="color: red;"> *</span></div>
					</div>
					<div class="diver1">
						<div class="text1">Enter le prenom et le nom du tuteur</div>
						<div class="text1">Enter le contact du tuteur</div>
					</div>
					<div class="texte2">
						<div class="text1">Photocopie CNI</div>
						<div class="text1">Extrait de naissance</div>
					</div>
					<div class="diver2">
						<div class="text1">
							<div class="fich">Choisir un fichier</div>
							Aucun fichier choisi
						</div>
						<div class="text1">
							<div class="fich">Choisir un fichier</div>
							Aucun fichier choisi
						</div>
					</div>
					<div class="texte3">
						<div class="text1">Diplome</div>
						<div class="text1">Casier Judiciaire</div>
					</div>
					<div class="diver3">
						<div class="text1">
							<div class="fich">Choisir un fichier</div>
							Aucun fichier choisi
						</div>
						<div class="text1">
							<div class="fich">Choisir un fichier</div>
							Aucun fichier choisi
						</div>
					</div>
					<div class="texte4">
						<div class="text1">Visite Medicale</div>
					</div>
					<div class="diver4">
						<div class="text1">
							<div class="fich">Choisir un fichier</div>
							Aucun fichier choisi
						</div>
					</div>
					<div class="boutton">
						<div class="rouge"><i class="fa-solid fa-xmark"></i> Cancel</div>
						<div class="vert"><i class="fa-solid fa-plus"></i> Creer nouvel apprenant</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<!-- MODAL 1 -->
	<div id="demo" class="modal">
		<div class="modal_content">
			<header class="modal-header">
				<h1>Nouvel Apprenant</h1>
			</header>

			<section>
				<div class="contentrer">
					<div class="head">
						<div class="text">Nouvel Apprenant</div>
						<div style="color: gray;" class="croix"><i class="fa-solid fa-x"></i></div>
					</div>
					<div class="tete">
						<div class="pen"><i class="fa-solid fa-pen"></i></div>
						<div class="text">Information Perso.</div>
						<div class="barre"></div>
						<div class="deux"><i class="fa-solid fa-2"></i></div>
						<div class="text">Informations Supplementaires</div>
					</div>

					<div class="rond"><span style="color: gray;font-size: 8px;">240+146</span></div>

					<div class="texte">
						<div class="text1">Nom </div>
						<div class="text1">Prenom</div>
					</div>
					<div class="diver1">
						<div class="text1">Enter le nom </div>
						<div class="text1">Enter le prenom</div>
					</div>
					<div class="texte2">
						<div class="text1">Email</div>
						<div class="text1">Telephone</div>
					</div>
					<div class="diver2">
						<div class="text1">
							Enter l'email
						</div>
						<div class="text1">
							Entrer le telephone
						</div>
					</div>
					<div class="texte3">
						<div class="text1">Sexe</div>
						<div class="text1">Date Naissance</div>
					</div>
					<div class="diver3">
						<div class="text1">
							Choisir le sexe <span style="color: red;">*</span>
							<span class="flesh"><i class="fa-solid fa-caret-down"></i></span>
						</div>
						<div class="text1">
							MM/DD/YY <span style="color: red;">*</span>
							<span class="flesh1"><i style="color: white;background-color: #008F89;padding: 13px; border-radius: 5px;" class="fa-solid fa-calendar-day"></i></span>
						</div>
					</div>
					<div class="texte4">
						<div class="text1">Lieu Naissance</div>
						<div class="text1">N* CNI</div>
					</div>
					<div class="diver4">
						<div class="text1">
							Entrer le lieu de naissance
						</div>
						<div class="text1">
							Entrer le numero de la CNI
						</div>
					</div>
					<div class="boutton">
						<a href="#demo1_suiv">
							<div class="vert">Suivant</div>
						</a>
					</div>
				</div>
			</section>


			<a href="#" class="modal_close">&times;</a>
			<footer class="container-footer">
				<!-- <a href="#" class="b1">Ajouter</a> -->
			</footer>
		</div>
	</div>
	<!-- MODAL 2 -->
	<div id="demo2" class="modal">
		<div class="modal_content">
			<header class="modal-header">
				<h1>Modal 2</h1>
			</header>

			<section>
				<div class="contenter">
					<h4>Choisir un Fichier Exel</h4>
					<div class="bordure">
						<div class="drop">Drop files here or click to upload</div>
					</div>
					<div class="boutton">
						<div class="rouge">Fermer</div>
						<div class="vert">Enregistrer</div>
					</div>
				</div>
			</section>

			<a href="#" class="modal_close">&times;</a>

			<footer class="container-footer">
				<a href="#demo3" class="b1">Suivant</a>
			</footer>
		</div>
	</div>

	<!-- MODAL 3 -->
	<div id="demo3" class="modal">
		<div class="modal_content">
			<header class="modal-header">
				<h1>Modal 3</h1>
			</header>

			<section>
				<p>Bienvenue sur la fenêtre modale du modal 3 !</p>
			</section>

			<a href="#" class="modal_close">&times;</a>

			<footer></footer>
		</div>
	</div>
	</div>

	<div class="footer">
		<p>© Sonatel Academy.</p>
	</div>
</body>

</html>
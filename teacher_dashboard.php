<?php ?>

<?php
$header_info = [
	'title' => 'Tableau d\'bord | Enseignants',

	'auth'       => 'teacher',
	'navigation' => 'teacher',
];
require('common/header.php')
?>
<main class="flex-grow-1 dashboard">
	<section class="dashboard-section">
		<div class="container dashboard-section-container">
			<h2 class="dashboard-section-header">Mes Annonces</h2>
			<div class="posts row">
				<div class="posts-card-container col-lg-6">
					<div class="posts-card">
						<div class="posts-card-actions">
							<a href="#" title="Voir" class="posts-card-actions-btn">
								<i class="fas fa-eye"></i>
							</a>
							<a href="#" title="Modifier" class="posts-card-actions-btn">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<button title="supprimer" class="posts-card-actions-btn">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<span class="posts-card-title">
							Titre De l'annonce !
						</span>
						<div class="posts-card-info row">
							<div class="col-6">
								<h3>Faculté:</h3>
								<div class="posts-card-info-fac">
									<span>Sci Ingéniorat</span>
									<img src="img/facs/fac-1.png" alt="">
								</div>
							</div>
							<div class="col-6 d-flex flex-column">
								<h3>Departement:</h3>
								<span class="posts-card-info-dep">Informatique</span>
							</div>
						</div>
						<div class="posts-card-themes">
							<h3>Etudiant encadré dans chaque theme</h3>
							<div class="posts-card-themes-container">
								<div class="posts-card-themes-card">
									<h4>theme 1</h4>
									<span>5</span>
								</div>
								<div class="posts-card-themes-card">
									<h4>theme 2</h4>
									<span>4</span>
								</div>
								<div class="posts-card-themes-card">
									<h4>theme 3</h4>
									<span>0</span>
								</div>
								<div class="posts-card-themes-card">
									<h4>theme 4</h4>
									<span>2</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="posts-card-container col-lg-6">
					<div class="posts-card">
						<div class="posts-card-actions">
							<a href="#" title="Voir" class="posts-card-actions-btn">
								<i class="fas fa-eye"></i>
							</a>
							<a href="#" title="Modifier" class="posts-card-actions-btn">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<button title="supprimer" class="posts-card-actions-btn">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<span class="posts-card-title">
							Titre De l'annonce !
						</span>
						<div class="posts-card-info row">
							<div class="col-6">
								<h3>Faculté:</h3>
								<div class="posts-card-info-fac">
									<span>Sci Ingéniorat</span>
									<img src="img/facs/fac-1.png" alt="">
								</div>
							</div>
							<div class="col-6 d-flex flex-column">
								<h3>Departement:</h3>
								<span class="posts-card-info-dep">Informatique</span>
							</div>
						</div>
						<div class="posts-card-themes">
							<h3>Etudiant encadré dans chaque theme</h3>
							<div class="posts-card-themes-container">
								<div class="posts-card-themes-card">
									<h4>theme 1</h4>
									<span>5</span>
								</div>
								<div class="posts-card-themes-card">
									<h4>theme 2</h4>
									<span>4</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- add post -->
				<div class="posts-card-container col-lg-6">
					<div class="posts-add-card">
						<button class="posts-add-card-btn">
							<i class="fas fa-plus-circle"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
require('common/footer.php')
?>

<?php
$header_info = [
	'title' => 'Mes Annonces | Enseignants',

	'auth'       => 'both',
	'navigation' => 'teacher',
];
require('common/header.php')
?>

<?php
if (!isset($_GET['post_id']) || empty($_GET['post_id'])) {
	header('location: error/404');
	exit;
}

use App\User;

$User = new User();
$result = $User->getPost($_GET['post_id']);

if (!$result['result']) {
	if ($result['result'] === '404') {
		header('location: error/404');
		exit;
	}
}

$post = $result['post'];
?>
<main class="post">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="posts-card">
					<div class="posts-card-header">
						<div class="posts-card-status">
							<h3>Ètat: </h3>
							<span class="status-<?= $post['status'] ?>"><?= $post['status'] ?></span>
						</div>
						<div></div>
					</div>
					<span class="posts-card-title">
						<?= $post['post_title'] ?>
					</span>
					<div class="row">
						<div class="col-12">
							<div class="posts-card-info h-100 row">
								<div class="col-sm-6 d-flex flex-column order-sm-0 order-1">
									<h3><i class="fas fa-user-tie fa-2x fa-fw"></i> Enseignant:</h3>
									<span class="posts-card-info-text"><?= $post['first_name'] ?> <?= $post['last_name'] ?></span>
								</div>
								<div class="col-sm-6 d-flex flex-column order-sm-1 order-0">
									<div style="flex-grow: 1;"></div>
									<button data-target="#mentorship-modal" data-toggle="modal" class="btn btn-primary py-4 w-100">
										<i class="fas fa-paper-plane fa-lg fa-2x mr-2 text-white"></i>
										<span class="text-white h4">Demand Encadrement</span>
									</button>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="posts-card-container">
								<div class="posts-card-info row">
									<div class="col-lg-3">
										<h3><i class="fas fa-city fa-2x fa-fw"></i> Faculté:</h3>
										<div class="posts-card-info-fac">
											<span><?= $post['fac_name'] ?></span>
											<img src="img/facs/fac-<?= $post['fac_id'] ?>.png" alt="">
										</div>
									</div>
									<div class="col-lg-3 d-flex flex-column">
										<h3><i class="fas fa-building fa-2x fa-fw"></i> Departement:</h3>
										<span class="posts-card-info-text"><?= $post['dep_name'] ?></span>
									</div>
									<div class="col-lg-3 d-flex flex-column">
										<h3><i class="fas fa-graduation-cap fa-2x fa-fw"></i> Année:</h3>
										<span class="posts-card-info-text"><?= $User->yearToString($post['post_year']) ?></span>
									</div>
									<div class="col-lg-3 d-flex flex-column">
										<h3><i class="fas fa-user-graduate fa-2x fa-fw"></i> Étudiants Encadrés:</h3>
										<span class="posts-card-info-text"><?= $post['mentorship_count'] ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- description -->
					<h2>Description:</h2>
					<p class="h5 pl-3 mb-4 mt-2">
						<?= $post['post_description'] ?>
					</p>
					<!-- themes -->
					<h2>Themes:</h2>
					<div class="post-theme-container row mt-2">
						<?php foreach ($post['themes'] as $theme) : ?>
							<div class="col-lg-6">
								<div class="post-theme theme-<?= $theme['theme_id'] ?>">
									<h5 class="post-theme-header counter">
										Theme
									</h5>
									<p class="post-theme-title">
										<?= $theme['theme_title'] ?>
									</p>
									<h5 class="post-theme-header">
										Description:
									</h5>
									<p class="post-theme-desc">
										<?= $theme['theme_description'] ?>
									</p>
									<h5 class="post-theme-header">
										Étudiants Encadrés: <?= $theme['mentorship_count'] ?>
									</h5>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- mentorship modal -->
<div class="modal fade" id="mentorship-modal">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<form class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Demand Encadrement</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<p>Étes-vous certain de vouloir envoyer une demande d'encadrement a cette announce ?</p>
				<p>
					ID de l'announce: <strong><?= $post['post_id'] ?></strong><br>
				</p>

				<div>
					<div class="input-container">
						<select name="theme" class="input shadow" required>
							<?php foreach ($post['themes'] as $theme) : ?>
								<option value="<?= $theme['theme_id'] ?>">
									<?= $theme['theme_title'] ?>
								</option>
							<?php endforeach ?>
						</select>
						<label class="input-label">
							Voilier choisir un theme:
						</label>
						<div class="input-underline"></div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-primary">Envoyer</button>
			</div>
		</form>
	</div>
</div>
<?php
require('common/footer.php')
?>

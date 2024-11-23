<?php # _layout/_layout.php
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?= MAINSITE_TEMPLATE; ?>assets/js/color-modes.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $page_description; ?>">
	<meta name="author" content="Adrian Johnson">
	<meta name="generator" content="Adrian Johnson">
	<title><?= $page_title; ?> · <?= SITE_TITLE; ?></title>
	<link rel="icon" type="image/x-icon" href="<?= BASE_URL; ?>favicon.ico" />

	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/starter-template/">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="<?= MAINSITE_TEMPLATE; ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= MAINSITE_TEMPLATE; ?>css/site.css" rel="stylesheet">

	<style>
	  .bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	  }

	  @media (min-width: 768px) {
		.bd-placeholder-img-lg {
		  font-size: 3.5rem;
		}
	  }

	  .b-example-divider {
		width: 100%;
		height: 3rem;
		background-color: rgba(0, 0, 0, .1);
		border: solid rgba(0, 0, 0, .15);
		border-width: 1px 0;
		box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	  }

	  .b-example-vr {
		flex-shrink: 0;
		width: 1.5rem;
		height: 100vh;
	  }

	  .bi {
		vertical-align: -.125em;
		fill: currentColor;
	  }

	  .nav-scroller {
		position: relative;
		z-index: 2;
		height: 2.75rem;
		overflow-y: hidden;
	  }

	  .nav-scroller .nav {
		display: flex;
		flex-wrap: nowrap;
		padding-bottom: 1rem;
		margin-top: -1px;
		overflow-x: auto;
		text-align: center;
		white-space: nowrap;
		-webkit-overflow-scrolling: touch;
	  }

	  .btn-bd-primary {
		--bd-violet-bg: #712cf9;
		--bd-violet-rgb: 112.520718, 44.062154, 249.437846;

		--bs-btn-font-weight: 600;
		--bs-btn-color: var(--bs-white);
		--bs-btn-bg: var(--bd-violet-bg);
		--bs-btn-border-color: var(--bd-violet-bg);
		--bs-btn-hover-color: var(--bs-white);
		--bs-btn-hover-bg: #6528e0;
		--bs-btn-hover-border-color: #6528e0;
		--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
		--bs-btn-active-color: var(--bs-btn-hover-color);
		--bs-btn-active-bg: #5a23c8;
		--bs-btn-active-border-color: #5a23c8;
	  }

	  .bd-mode-toggle {
		z-index: 1500;
	  }

	  .bd-mode-toggle .dropdown-menu .active .bi {
		display: block !important;
	  }
	</style>

	  <?=$page_head?>
	
  </head>
  <body>
	  
<div class="col-lg-8 mx-auto p-4 py-md-5">
	<header class="pb-3 mb-5">
		<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
		  <div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
			  <a class="navbar-brand col-lg-3 me-0" href="<?= BASE_URL; ?>" title="Home"><?= SITE_TITLE; ?></a>
			  <ul class="navbar-nav col-lg-6 justify-content-lg-center">
				<li class="nav-item">
				  <a class="nav-link <?php if ($page_name == 'home') echo 'active'; ?>" aria-current="page" href="<?= BASE_URL; ?>" title="Home">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link <?php if ($page_name == 'projects') echo 'active'; ?>" href="<?= BASE_URL; ?>projects/" title="Projects">Projects</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link <?php if ($page_name == 'resume') echo 'active'; ?>" href="<?= BASE_URL; ?>resume/" title="Resume">Resume</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link <?php if ($page_name == 'joy') echo 'active'; ?>" href="<?= BASE_URL; ?>joy/" title="Joy">Joy</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
	</header>

  <main>
	  <?=$page_output?>
  </main>
  
  <footer class="pt-5 my-5 text-body-secondary border-top">
	  <small>
	Made By Ade &middot; &copy; <?php echo date("Y"); ?> Adrian Johnson &middot; <a href="<?= BASE_URL; ?>terms.php" title="Terms">Terms</a> &middot; <a href="<?= BASE_URL; ?>privacy.php" title="Privacy">Privacy</a><br />
	Connect <a href="https://twitter.com/adrianjohnson" title="twitter" target="twitter"><i class="bi bi-twitter-x"></i> @adrianjohnson</a>  &middot; 
	<a href="https://facebook.com/iamadrianjohnson" title="facebook" target="facebook"><i class="bi bi-facebook"></i> iamadrianjohnson</a>
	  </small>
  </footer>
</div>

<script src="<?= MAINSITE_TEMPLATE; ?>assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= JQUERY_URL; ?>jquery.js"></script>

  <?=$page_scripts?>
  
  <?php 
	addVisitorToDb();
	?>

	</body>
</html>
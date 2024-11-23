<?php	# projects/index.php
require('../app.php');

$page_description = 'Web applications Adrian Johnson has created.';
$page_name = 'projects';
$page_title = 'Projects';
$page_head = '';

ob_start();
?>

<h1 class="text-body-emphasis"><?= $page_title; ?></h1>
<p class="fs-5 col-md-8">Projects I have worked on.</p>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-7">
		<h2 class="text-body-emphasis">Adrian Johnson</h2>
		<p>My portfolio website. Simple hand-coded site to showcase projects I'm working on, plus my resume for those who are interested.</p>
	</div>
	<div class="col-md-5 text-center">
		<img class="img-fluid" src="<?= BASE_URL ?>images/adrian-johnson-website-portrait-bw.png" alt="Adrian Johnson website portrait" />
	</div>
</div>


<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('../_layout/_layout.php');
?>

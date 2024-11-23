<?php	# test4/subfolder/index.php
require('../../app.php');

$page_description = '';
$page_name = 'test-subfolder';
$page_title = 'Test Subfolder';
$page_head = '';

$url = $_SERVER['HTTP_HOST'];
$test = explode('.', $_SERVER['HTTP_HOST'])[0];

ob_start();
?>


<h1 class="text-body-emphasis"><?= $page_title; ?></h1>

<p><?= $url; ?><br />
<?= $test; ?></p>

<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('../../_layout/_layout.php');
?>
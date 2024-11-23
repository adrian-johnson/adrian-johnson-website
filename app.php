<?php # app.php
define('BASE_URL', 'https://adrian-johnson.com/');
define('ENVIRONMENT', 'dev');
define('JQUERY_URL', 'https://adrian-johnson.com/vendors/jquery/');
define('MAINSITE_TEMPLATE', 'https://adrian-johnson.com/templates/mainsite/');
define('SERVER_URL', 'https://adrian-johnson.com/');
define('SITE_TITLE', 'Adrian Johnson');
define('TEMPLATE_URL', 'https://adrian-johnson.com/templates/');

require(__DIR__.'/requires.php');

// Add classes.
function class_loader($class) {
	require(__DIR__.'/classes/' . $class . '.php');
}
spl_autoload_register('class_loader');

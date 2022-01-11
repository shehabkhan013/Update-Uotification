<?php


<?php


require get_template_directory() .'/inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://plugaddons.com/json/composer.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'unique-plugin-or-theme-slug'
);

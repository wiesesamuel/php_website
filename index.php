<?php
require 'config.php';
echo ROOT_PATH;

require ROOT_PATH . '/inc/language.php';
require translate(ROOT_PATH . '/inc/header.php');
require translate(ROOT_PATH . '/inc/navigationbar.php');
require translate(ROOT_PATH . '/inc/landingpage_content.php');
require translate(ROOT_PATH . '/inc/footer.php');
?>
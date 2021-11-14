<?php
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);
define('HOST', 'http://localhost:8088');
require ROOT_PATH . "/inc/language.php";
require translate(ROOT_PATH . '/inc/header.php');
require translate(ROOT_PATH . '/sites/landingpage.php');
require translate(ROOT_PATH . '/inc/footer.php');

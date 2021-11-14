<?php
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);
define('HOST', 'http://localhost:8088');

require __DIR__ . "/inc/language.php";
require translate(__DIR__ . '/inc/header.php');
require translate(__DIR__ . '/sites/landingpage.php');
require translate(__DIR__ . '/inc/footer.php');

<?php
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);
define('HOST', 'http://localhost:8090');
require __DIR__ . "/inc/language.php";
require translate(__DIR__ . '/inc/header.php');
//require translate(__DIR__ . '/sites/landingpage.html');
require translate(__DIR__ . '/inc/footer.php');

<?php
// server
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);
//define('ROOT_PATH', '/usr/share/cinecal');
define('HOST', 'http://localhost:8077');
//define('HOST', 'http://wiesesamuel.de');

// software
define("PRODUCTION", false);
define("TITLE", "WieseSamuel");
define("VERSION", "0.1");

// client
// use cookie language or the default: german
define('LANG', $_COOKIE["language"] ?? 'de-DE');

// sql
$host = "localhost";
$user = "wiesesamuel";
$database = "wiesesamuel";
$pass = "iahf0987309m90m";

// page
define('ENABLED_FOTO', false);
define('ENABLED_CINECAL', false);
define('ENABLED_LOGIN', false);

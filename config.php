<?php
define("PRODUCTION", $_SERVER["DOCUMENT_ROOT"] == '/usr/share/cinecal');

if (PRODUCTION) {
    define('ROOT_PATH', '/usr/share/cinecal');
    define('HOST', 'http://wiesesamuel.de');
    define('OBFUSCATE', false);
    define('ENABLE_SQL', false);
    define('ENABLE_USER_REGISTRATION', false);
    define('ENABLE_USER_LOGIN', true);
} else {
    define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);
    define('HOST', 'http://localhost:8077');
    define('OBFUSCATE', false);
    define('ENABLE_SQL', false);
    define('ENABLE_USER_REGISTRATION', true);
    define('ENABLE_USER_LOGIN', true);
}

// server
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
define('ENABLED_LOGIN', true);

// feature

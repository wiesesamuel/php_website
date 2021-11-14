<?php
function translate($file)
{
    $cache_file = 'cache/' . LANG . '_' . basename($file, ".php") . '_' . VERSION . '.php';

    // (re)build translation?
    if (!file_exists($cache_file) or !PRODUCTION) {
        $lang_file = 'lang/' . LANG . '.ini';
        $lang_file_php = 'cache/' . LANG . '_' . VERSION . '.php';

        // convert .ini file into .php file
        if (!file_exists($lang_file_php) or !PRODUCTION) {
            file_put_contents($lang_file_php, '<?php $strings=' .
                var_export(parse_ini_file($lang_file), true) . ';', LOCK_EX);
        }

        // translate .php into localized .php file
        $tr = function ($match) use (&$lang_file_php) {
            static $strings = null;
            if ($strings === null) require($lang_file_php);
            return isset($strings[$match[1]]) ? $strings[$match[1]] : $match[1];
        };
        try {
            // replace all [%tr%]abc[%/tr%] by tr()
            $result = preg_replace_callback('/\[%tr%\](.*?)\[%\/tr%\]/', $tr, file_get_contents($file));

            // remove html comments and save file
            file_put_contents($cache_file, preg_replace(
                '/<!--(.|\s)*?-->/', "", $result), LOCK_EX);
        } catch (Exception $e) {
            echo 'Exception abgefangen: ', $e->getMessage(), "\n";
        }
    }
    return $cache_file;
}
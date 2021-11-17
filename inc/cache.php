<?php
require ROOT_PATH . '/libary/hunter-php-javascript-obfuscator/original/HunterObfuscator.php';

function cacheAndGetAbsolutePath($file)
{
    return ROOT_PATH . '/' . cache($file);
}

function cache($file)
{
    // get file type
    $extension = pathinfo($file)['extension'];
    $cache_file_path = 'cache/' . basename($file, $extension) . '_' . VERSION . $extension;

    // (re)build cache?
    if (!file_exists($cache_file_path) or !PRODUCTION) {

        $input = file_get_contents(ROOT_PATH . $file);
        $output = null;

        switch ($extension) {
            case ('php'):
                // remove html comments
                $input = rm_pattern($input, '/<!--(.|\s)*?-->/');
                // translate file
                $output =  translate($input);
                break;
            case ('js'):
            case ('html'):
                if (OBFUSCATE) {
                    // obfuscate
                    $output = obfuscateJSorHTML($input, $extension == 'html');
                    break;
                }
            // when no extension routine is defined (or not obfuscating), return same file
            default:
                return $file;
        }
        // save file
        file_put_contents($cache_file_path, $output, LOCK_EX);
    }
    // return path
    return $cache_file_path;
}

function rm_pattern($input, ...$pattern)
{
    foreach ($pattern as $p) {
        $input = preg_replace($p, '', $input);
    }
    return $input;
}

function obfuscateJSorHTML($input, $html = false)
{
    // remove comments
    $input = $html ? rm_pattern($input, '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))/') : rm_pattern($input, '/<!--(.|\s)*?-->/');
    $hunter = new HunterObfuscator($input, $html);
    return $hunter->Obfuscate();
}

function translate($file)
{
    // get translation file
    $lang_file = 'lang/' . LANG . '.ini';

    // convert .ini file into .php file
    $lang_file_php = '/cache/' . LANG . '_' . VERSION . '.php';
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

    // translate by replacing all [%tr%]abc[%/tr%] with tr()
    return preg_replace_callback('/\[%tr%\](.*?)\[%\/tr%\]/', $tr, file_get_contents($file));
}

// TODO: minify css via https://github.com/mrclay/minify
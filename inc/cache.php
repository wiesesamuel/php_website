<?php
require ROOT_PATH . '/libary/hunter-php-javascript-obfuscator/original/HunterObfuscator.php';

function cache($fileRelativePath, $absolutPath=false)
{
    // get file type
    $extension = pathinfo($fileRelativePath)['extension'];

    // generate cache file name
    $nameAddition = $extension == 'php' ? LANG . '_' : '';
    $cacheRelativePath = 'cache/' . $nameAddition . basename($fileRelativePath, '.' . $extension) . '_' . VERSION . '.' . $extension;
    $cacheAbsolutPath = ROOT_PATH . '/' . $cacheRelativePath;

    // (re)build cache?
    if (!file_exists($cacheAbsolutPath) or !PRODUCTION) {

        $input = file_get_contents(ROOT_PATH . '/' . $fileRelativePath);

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
                return $absolutPath? ROOT_PATH . '/' . $fileRelativePath : $fileRelativePath;
        }
        // save file
        file_put_contents($cacheAbsolutPath, $output, LOCK_EX);
    }
    // return path
    return $absolutPath? $cacheAbsolutPath : $cacheRelativePath;
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

function translate($input)
{
    // translation file
    $langINIfileAbsolutePath = ROOT_PATH . '/lang/' . LANG . '.ini';

    // convert .ini file into .php file
    $langPHPfileAbsolutePath = ROOT_PATH . '/cache/' . LANG . '_' . VERSION . '.php';
    if (!file_exists($langPHPfileAbsolutePath) or !PRODUCTION) {
        file_put_contents($langPHPfileAbsolutePath, '<?php $strings=' .
            var_export(parse_ini_file($langINIfileAbsolutePath), true) . ';', LOCK_EX);
    }

    // translate .php into localized .php file
    $tr = function ($match) use (&$langPHPfileAbsolutePath) {
        static $strings = null;
        if ($strings === null) require($langPHPfileAbsolutePath);
        return isset($strings[$match[1]]) ? $strings[$match[1]] : $match[1];
    };

    // translate by replacing all [%tr%]abc[%/tr%] with tr()
    return preg_replace_callback('/\[%tr%\](.*?)\[%\/tr%\]/', $tr, $input);
}

// TODO: minify css via https://github.com/mrclay/minify
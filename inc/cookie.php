<?php
function remember_cookie($bool)
{
    setcookie(
        "remember_user",
        $bool
    );
}

function get_cookie_state() {
    if (isset($_COOKIE['remember_user'])) {
        return $_COOKIE['remember_user'];
    }
    return false;
}

function save_language($lang)
{
    setcookie(
        "language",
        $lang,
        0,
        "/",
        "wiesesamuel.de",
    );
}
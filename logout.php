<?php
require 'config.php';
require ROOT_PATH . '/inc/cache.php';
require cache('/inc/header.php');

session_destroy();

require cache('/inc/navigationbar.php');

echo "Logout erfolgreich";
?>
    <br>
    <button type="button"
            class="btn btn-light btn-outline-dark"
            onclick="location.href='<?php echo HOST . '/register.php' ?>';">[%tr%]Register[%/tr%]
    </button>

    <button type="button"
            class="btn btn-light btn-outline-dark"
            onclick="location.href='<?php echo HOST . '/login.php' ?>';">[%tr%]Login[%/tr%]
    </button>

<?php
require cache('/inc/footer.php');
?>
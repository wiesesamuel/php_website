<?php
require 'config.php';
if (!ENABLE_USER_LOGIN) {
    echo 'Der Login ist momentan deaktiviert';
    return;
}

require ROOT_PATH . '/inc/sql.php';
require ROOT_PATH . '/inc/cache.php';
require cache('/inc/header.php');


if (isset($_GET['login'])) {
    $email = $db->escape_string($_POST['email']);
    $password = $_POST['password'];

    $statement = $db->prepare("SELECT * FROM users WHERE email =?");
    $statement->bind_param("s", $email);
    $statement->execute();
    $result = $statement->get_result();
    $user = $result->fetch_all(MYSQLI_ASSOC)[0];

    //Überprüfung des Passworts
    if ($user['email'] == $email && password_verify($password, $user['password'])) {
        $_SESSION['userid'] = $user['id'];
        $errorMessage = 'Login erfolgreich.';
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}
?>
<?php
require cache('/inc/navigationbar.php');

if (isset($errorMessage)) {
    echo $errorMessage;
}
?>
<!--
<button type="button"
        class="btn btn-light btn-outline-dark"
        onclick="location.href='<?php echo HOST . '/register.php' ?>';">[%tr%]Register[%/tr%]
</button>

<button type="button"
        class="btn btn-light btn-outline-dark"
        onclick="location.href='<?php echo HOST . '/logout.php' ?>';">[%tr%]Logout[%/tr%]
</button>
<br><br>
-->

<form action="?login=1" method="post">
    E-Mail:<br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>

    Dein Passwort:<br>
    <input type="password" size="40" maxlength="250" name="password"><br><br>

    <input type="submit" value="Abschicken" class="btn btn-light btn-outline-dark" style="width: 400px">
</form>
<?php
require cache('/inc/footer.php');
?>

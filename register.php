<?php
require 'config.php';
if (!ENABLE_USER_REGISTRATION) {
    echo 'Die Registrierung ist momentan deaktiviert';
    return;
}

require ROOT_PATH . '/inc/sql.php';
require ROOT_PATH . '/inc/cache.php';
require cache('/inc/header.php');
require cache('/inc/navigationbar.php');

//Variable ob das Registrierungsformular anezeigt werden soll
$showFormular = true;

if (isset($_GET['register'])) {
    $error = false;
    $email = $db->escape_string($_POST['email']);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }
    if (strlen($password) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    if ($password != $password2) {
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }

    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if (!$error) {
        $statement = $db->prepare("SELECT count(*) as count FROM users WHERE email =?");
        $statement->bind_param("s", $email);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_all(MYSQLI_ASSOC)[0];

        if ($row["count"] > 0) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }
    }

    //Keine Fehler, wir können den Nutzer registrieren
    if (!$error) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $statement = $db->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $bind = $statement->bind_param("ss", $email, $password_hash);
        $exc = $statement->execute();

        if ($exc) {
            echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    }
}

if ($showFormular) {
    ?>
    <button type="button"
            class="btn btn-light btn-outline-dark"
            onclick="location.href='<?php echo HOST . '/login.php' ?>';">[%tr%]Login[%/tr%]
    </button>

    <button type="button"
            class="btn btn-light btn-outline-dark"
            onclick="location.href='<?php echo HOST . '/logout.php' ?>';">[%tr%]Logout[%/tr%]
    </button><br><br>

    <form action="?register=1" method="post">
        E-Mail:<br>
        <input type="email" size="40" maxlength="250" name="email"><br><br>

        Dein Passwort:<br>
        <input type="password" size="40" maxlength="250" name="password"><br><br>

        Passwort wiederholen:<br>
        <input type="password" size="40" maxlength="250" name="password2"><br><br>

        <input type="submit" value="Abschicken" class="btn btn-light btn-outline-dark" style="width: 400px">
    </form>

    <?php
} //Ende von if($showFormular)

require cache('/inc/footer.php');
?>



```php
<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Connexion et création de session
Date : 17/10/2026
*/

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $login = trim($_POST["login"] ?? "");

    if ($login === "") {
        $erreur = "Veuillez saisir un login.";
    } else {

        $_SESSION["login"] = $login;

        setcookie(
            "dernier_login",
            $login,
            time() + 86400,
            "/"
        );

        header("Location: profil.php");
        exit;
    }
}

$dernier_login = $_COOKIE["dernier_login"] ?? "";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<h1>Connexion</h1>

<?php if (isset($erreur)): ?>
    <p><?= htmlspecialchars($erreur, ENT_QUOTES, "UTF-8") ?></p>
<?php endif; ?>

<form action="login.php" method="POST">

    <label for="login">Login :</label>

    <input
        type="text"
        id="login"
        name="login"
        value="<?= htmlspecialchars($dernier_login, ENT_QUOTES, "UTF-8") ?>"
        required
    >

    <button type="submit">Se connecter</button>

</form>

</body>
</html>
```

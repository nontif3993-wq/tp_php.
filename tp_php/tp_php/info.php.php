```php
<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Traitement du formulaire GET
Date : 17/10/2026
*/

$nom = trim($_GET["nom"] ?? "");
$prenom = trim($_GET["prenom"] ?? "");
$sexe = $_GET["sexe"] ?? "";

if ($nom === "" || $prenom === "") {
    exit("Veuillez saisir votre nom et votre prénom.");
}

if (!in_array($sexe, ["M", "F"], true)) {
    exit("Sexe invalide.");
}

$nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
$prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");

if ($sexe === "M") {
    echo "Bonjour Monsieur $prenom $nom";
} else {
    echo "Bonjour Madame $prenom $nom";
}
?>
```

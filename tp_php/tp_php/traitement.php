
<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Vérifier et afficher les notes des apprenants
Date : 17/10/2026
*/

require_once "config.php";

// Vérifier que le formulaire utilise POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Veuillez remplir le formulaire.");
}

// Vérifier que les champs existent
if (
    !isset($_POST["nom"], $_POST["note_info"], $_POST["note_math"])
    || trim($_POST["nom"]) === ""
    || $_POST["note_info"] === ""
    || $_POST["note_math"] === ""
) {
    exit("Erreur : veuillez remplir tous les champs.");
}

// Récupérer les données
$nom = trim($_POST["nom"]);
$note_info = filter_var($_POST["note_info"], FILTER_VALIDATE_FLOAT);
$note_math = filter_var($_POST["note_math"], FILTER_VALIDATE_FLOAT);

// Vérifier les notes
if (
    $note_info === false ||
    $note_math === false ||
    $note_info < NOTE_MIN ||
    $note_info > NOTE_MAX ||
    $note_math < NOTE_MIN ||
    $note_math > NOTE_MAX
) {
    exit("Erreur : les notes doivent être comprises entre 0 et 20.");
}

// Calculer la moyenne
$moyenne = ($note_info + $note_math) / 2;

// Protéger le nom avant l'affichage
$nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");

// Afficher les résultats
echo "<h1>Résultat de l'apprenant</h1>";

echo "Nom : " . $nom . "<br>";

echo "Note Informatique : " . $note_info . "<br>";

echo "Note Mathématiques : " . $note_math . "<br>";

echo "Moyenne : " . number_format($moyenne, 2) . "/20<br>";

if ($moyenne >= 16) {
    echo "Mention : Très bien";
} elseif ($moyenne >= 14) {
    echo "Mention : Bien";
} elseif ($moyenne >= 12) {
    echo "Mention : Assez bien";
} elseif ($moyenne >= SEUIL) {
    echo "Mention : Passable";
} else {
    echo "Mention : Ajourné";
}
?>


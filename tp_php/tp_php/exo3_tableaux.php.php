```php
<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Manipulation des tableaux et statistiques
Date : 17/10/2026
*/

require_once "config.php";
require_once "exo2_flux.php";

echo "<h1>Partie 3 : Tableaux</h1>";

// ===================================
// Exercice 3.1 : Création
// ===================================

$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

$modules = ["PHP", "HTML", "JavaScript"];

echo "<h2>Modules avec foreach</h2>";

foreach ($modules as $module) {
    echo htmlspecialchars($module) . "<br>";
}

echo "<h2>Modules par indice</h2>";

for ($i = 0; $i < count($modules); $i++) {
    echo $modules[$i] . "<br>";
}

// ===================================
// Exercice 3.2 : Tableau HTML
// ===================================

echo "<h2>Notes des apprenants</h2>";

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";

foreach ($notes as $nom => $note) {
    $couleur = ($note < SEUIL) ? "red" : "black";

    echo "<tr style='color:$couleur'>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}

echo "</table>";

// ===================================
// Exercice 3.3 : Statistiques
// ===================================

$somme = 0;
$meilleure = null;
$faible = null;

foreach ($notes as $note) {
    $somme += $note;

    if ($meilleure === null || $note > $meilleure) {
        $meilleure = $note;
    }

    if ($faible === null || $note < $faible) {
        $faible = $note;
    }
}

$nombre = count($notes);
$moyenne = $somme / $nombre;

echo "<h2>Statistiques</h2>";

echo "Somme : $somme<br>";
echo "Moyenne : " . number_format($moyenne, 2) . "<br>";
echo "Meilleure note : $meilleure<br>";
echo "Note la plus faible : $faible<br>";

// Vérification avec les fonctions PHP

echo "Somme vérifiée : " . array_sum($notes) . "<br>";
echo "Nombre d'apprenants : " . count($notes) . "<br>";
echo "Maximum : " . max($notes) . "<br>";
echo "Minimum : " . min($notes) . "<br>";

// Effectifs par mention

$effectifs = [];

foreach ($notes as $note) {
    $m = mention($note);

    if (!isset($effectifs[$m])) {
        $effectifs[$m] = 0;
    }

    $effectifs[$m]++;
}

echo "<h3>Effectifs par mention</h3>";

foreach ($effectifs as $m => $effectif) {
    echo htmlspecialchars($m) . " : $effectif<br>";
}

// ===================================
// Exercice 3.4 : Tri
// ===================================

function afficher($tab)
{
    echo "<table border='1' cellpadding='5'>";

    foreach ($tab as $nom => $note) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars((string) $nom) . "</td>";
        echo "<td>" . htmlspecialchars((string) $note) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

$tri = $notes;
ksort($tri);
echo "<h3>Tri par noms croissants</h3>";
afficher($tri);

$tri = $notes;
arsort($tri);
echo "<h3>Tri par notes décroissantes</h3>";
afficher($tri);

$tri = $notes;
krsort($tri);
echo "<h3>Tri par noms décroissants</h3>";
afficher($tri);

$tri = $notes;
asort($tri);
echo "<h3>Tri par notes croissantes</h3>";
afficher($tri);

// Pour trier un tableau indexé : sort().

// ===================================
// Exercice 3.5 : Opérateurs de tableaux
// ===================================

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "<h2>Opérateurs de tableaux</h2>";

echo "<pre>";

print_r($a + $b);

var_dump($a == $b);
var_dump($a === $b);

echo "</pre>";
?>
```

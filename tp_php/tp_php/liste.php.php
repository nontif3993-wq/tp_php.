<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Lire et afficher les notes depuis un CSV.
Date : 18/10/2026
*/

require_once "config.php";

$fichier = __DIR__ . "/data/notes.csv";

if (!file_exists($fichier)) {
    exit("Aucune donnée enregistrée pour le moment.");
}

$handle = fopen($fichier, "r");

if ($handle === false) {
    exit("Erreur lors de l'ouverture du fichier.");
}

echo "<h1>Liste des apprenants</h1>";

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Nom</th>
        <th>Info</th>
        <th>Math</th>
        <th>Moyenne</th>
        <th>Mention</th>
      </tr>";

$somme_moyennes = 0;
$nombre = 0;

while (($ligne = fgetcsv($handle, 0, ";")) !== false) {
    if (count($ligne) < 3) {
        continue;
    }

    [$nom, $info, $math] = $ligne;

    $info = (float) $info;
    $math = (float) $math;

    $moyenne = ($info + $math) / 2;

    if ($moyenne >= 16) {
        $mention = "Très bien";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
    } elseif ($moyenne >= 12) {
        $mention = "Assez bien";
    } elseif ($moyenne >= SEUIL) {
        $mention = "Passable";
    } else {
        $mention = "Ajourné";
    }

    echo "<tr>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$info</td>";
    echo "<td>$math</td>";
    echo "<td>$moyenne</td>";
    echo "<td>$mention</td>";
    echo "</tr>";

    $somme_moyennes += $moyenne;
    $nombre++;
}

fclose($handle);

echo "</table>";

if ($nombre > 0) {
    $moyenne_generale = $somme_moyennes / $nombre;
    echo "<p>Moyenne générale : $moyenne_generale</p>";
} else {
    echo "<p>Aucun apprenant enregistré.</p>";
}

```php
<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Structures de contrôle et boucles
Date : 17/10/2026
*/

require_once "config.php";

echo "<h1>Partie 2 : Structures de contrôle</h1>";

// ===================================
// Exercice 2.1 : Fonction mention()
// ===================================

function mention($note)
{
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo "<h2>Exercice 2.1</h2>";

$notes_test = [7, 10, 12, 14, 17];

foreach ($notes_test as $note) {
    echo "Note : $note - Mention : " . mention($note) . "<br>";
}

// ===================================
// Exercice 2.2 : switch
// ===================================

echo "<h2>Exercice 2.2</h2>";

$mois = (int) date("m");

switch ($mois) {
    case 1:
        $nom_mois = "Janvier";
        break;
    case 2:
        $nom_mois = "Février";
        break;
    case 3:
        $nom_mois = "Mars";
        break;
    case 4:
        $nom_mois = "Avril";
        break;
    case 5:
        $nom_mois = "Mai";
        break;
    case 6:
        $nom_mois = "Juin";
        break;
    case 7:
        $nom_mois = "Juillet";
        break;
    case 8:
        $nom_mois = "Août";
        break;
    case 9:
        $nom_mois = "Septembre";
        break;
    case 10:
        $nom_mois = "Octobre";
        break;
    case 11:
        $nom_mois = "Novembre";
        break;
    case 12:
        $nom_mois = "Décembre";
        break;
    default:
        $nom_mois = "Mois inconnu";
}

echo "Mois actuel : $nom_mois<br>";

// Sans break, l'exécution continue dans les cases suivants.

// ===================================
// Exercice 2.3 : Boucles
// ===================================

echo "<h2>1. Triangle</h2>";

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}

echo "<h2>2. Nombres pairs de 0 à 20</h2>";

$i = 0;

while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
}

echo "<h2>3. Nombres pairs avec continue</h2>";

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }

    echo "$i<br>";
}

echo "<h2>4. while, switch et break 2</h2>";

$i = 1;

while ($i <= 10) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;

        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }

    $i++;
}

echo "<h2>5. do-while</h2>";

$i = 0;

do {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
} while ($i <= 20);
?>
```


<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Variables, constantes, types et chaînes
Date : 17/10/2026
*/

require_once "config.php";

echo "<h1>TP 3 PHP : Bases</h1>";

// ===================================
// Exercice 1.1 : Noms de variables
// ===================================

// Valides : $x, $_x, $Prix_HT, $état
// Invalides : $2x, $x-y, $prix ht

$x = 10;
$_x = 20;
$Prix_HT = 60;
$état = "actif";

$a = 5;
$A = 15;

echo "<h2>Exercice 1.1</h2>";

echo "\$a = $a<br>";
echo "\$A = $A<br>";

// $a et $A sont deux variables distinctes.

// ===================================
// Exercice 1.2 : Constantes
// ===================================

echo "<h2>Exercice 1.2</h2>";

echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "Note minimale : " . NOTE_MIN . "<br>";
echo "Note maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br>";

var_dump(defined("SEUIL"));
echo "<br>";

var_dump(defined("INCONNUE"));
echo "<br>";

// Une constante non définie produit généralement
// un avertissement et une erreur de type Error
// selon la version de PHP.
// const est adapté aux constantes de compilation.
// define() permet de définir une constante à l'exécution.

// ===================================
// Exercice 1.3 : Calcul du prix TTC
// ===================================

echo "<h2>Exercice 1.3</h2>";

$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.<br>";

// ===================================
// Exercice 1.4 : Types et conversions
// ===================================

echo "<h2>Exercice 1.4</h2>";

$test = 42;
$test = (string) $test;

var_dump($test);
echo "<br>";

// Conversion en booléen

var_dump((bool) 0);
echo "<br>";

var_dump((bool) 0.0);
echo "<br>";

var_dump((bool) "0");
echo "<br>";

var_dump((bool) "");
echo "<br>";

var_dump((bool) "abc");
echo "<br>";

var_dump((bool) []);
echo "<br>";

var_dump((bool) null);
echo "<br>";

// Autres conversions

var_dump((int) 3.9);
echo "<br>";

var_dump((int) "12abc");
echo "<br>";

var_dump((float) "1.5e3");
echo "<br>";

var_dump((int) true);
echo "<br>";

// Nombre 255 dans différentes bases

$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Décimal : " . $decimal . "<br>";
echo "Hexadécimal : " . $hexadecimal . "<br>";
echo "Octal : " . $octal . "<br>";
echo "Binaire : " . $binaire . "<br>";

// ===================================
// Exercice 1.5 : Chaînes de caractères
// ===================================

echo "<h2>Exercice 1.5</h2>";

$traitees = "égales à";
$ici = 2;

echo 'Ahmed a dit : "J\'ai réussi"' . "<br>";

echo 'Voulez-vous supprimer C:\*.*?' . "<br>";

echo 'Ceci n\'affichera pas \n de nouvelle ligne' . "<br>";

echo 'Les variables ne seront pas $traitees $ici' . "<br>";

echo "Les variables seront $traitees $ici" . "<br>";

// Retirer les étoiles au début et à la fin

$chaine = "*Bonjour les développeurs*";

echo trim($chaine, "*") . "<br>";

// Afficher chaque caractère sur une ligne

$texte = "PHP";

for ($i = 0; $i < strlen($texte); $i++) {
    echo $texte[$i] . "<br>";
}
?>


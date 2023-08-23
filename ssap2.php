<?php

$texte = 'tutu toto 4234 "_hop XXX" ## "1948372 AhAhAh"';

// // Supprimer les espaces excédentaires et les limiter à un seul espace
// $texte_modifie = preg_replace('/\s+/', ' ', $texte);

// // Séparer la chaîne en mots
// $mots = explode(" ", $texte_modifie);

// // Afficher les mots dans un tableau avec chaque mot sur une nouvelle ligne
// echo "<table>";
// foreach ($mots as $mot) {
//     echo "<tr><td>" . $mot . "</td></tr>";
// }
// echo "</table>";



// // Tableau de chaînes de caractères

//     "bonjour",
//     "A DEMAIN",
//     "1234",
//     "%/"


// Supprimer les espaces excédentaires et les limiter à un seul espace
$texte_modifie = str_replace('"', '', $texte);

// Séparer la chaîne en mots
$mots = explode(" ", $texte_modifie);

// Fonction de tri personnalisée
function customSort($a, $b)
{
    if (ctype_upper($a) && !ctype_upper($b)) {
        return -1; // Met les majuscules en premier
    } elseif (!ctype_upper($a) && ctype_upper($b)) {
        return 1;
    } elseif (ctype_lower($a) && !ctype_lower($b)) {
        return -1; // Met les minuscules ensuite
    } elseif (!ctype_lower($a) && ctype_lower($b)) {
        return 1;
    } elseif (is_numeric($a) && !is_numeric($b)) {
        return -1; // Met les chiffres ensuite
    } elseif (!is_numeric($a) && is_numeric($b)) {
        return 1;
    } else {
        return strcmp($a, $b); // Tri par ordre alphabétique pour les autres cas
    }
}

// Tri du tableau
usort($mots, "customSort");

// Affichage du tableau trié
echo "<table>";
foreach ($mots as $mot) {
    echo "<tr><td>" . $mot . "</td></tr>";
}
echo "</table>";

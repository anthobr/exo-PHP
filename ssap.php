<?php
// Chaîne de texte avec des espaces excédentaires
$texte = "Bonjour tout     le       monde.";

// Supprimer les espaces excédentaires et les limiter à un seul espace
$texte_modifie = preg_replace('/\s+/', ' ', $texte);

// Séparer la chaîne en mots
$mots = explode(" ", $texte_modifie);

// Afficher les mots dans un tableau avec chaque mot sur une nouvelle ligne
echo "<table>";
foreach ($mots as $mot) {
    echo "<tr><td>" . $mot . "</td></tr>";
}
echo "</table>";

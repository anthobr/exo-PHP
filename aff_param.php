<?php

// Chaîne de texte
$texte = "Bonjour tout le monde";

// Séparer la chaîne en mot
$mots = explode(" ", $texte);

// Afficher les mots
foreach ($mots as $mot) {
    echo $mot . "<br>";
}

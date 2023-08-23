<?php
// Chaîne de texte
$texte = "Je crois     que je me suis trompé   ergb";

// Séparer la chaîne en mots
$mots = explode(" ", $texte);

// Extraire le premier mot
$premier_mot = array_shift($mots);

// Recréer la chaîne sans le premier mot
$nouvelle_chaine = implode(" ", $mots);

// Placer le premier mot à la fin de la nouvelle chaîne
$nouvelle_chaine = $nouvelle_chaine . " " . $premier_mot;

// Afficher la nouvelle chaîne
echo $nouvelle_chaine;

<?php
$texte = "Bonjour,    j'aimerais  dans   le  cadre    d'un   code   en   php,    séparer  chaque    mot   dans  un   tableau               et    aller   à   la   ligne   à   chaque   mot.";

// Supprimer les espaces excédentaires et les limiter à un seul espace
$texte_modifie = preg_replace('/\s+/', ' ', $texte);

// Séparer la chaîne en mots

// Afficher les mots dans un tableau avec chaque mot sur une nouvelle ligne
echo $texte_modifie;

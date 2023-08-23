<?php
// Chaînes de caractères à vérifier
$chaines = array(
    "Bonjour comment ça va",
    "C'est une belle journée",
    "Salut, comment allez-vous?",
    "Hello! How are you?",
    "BONJOUR",
    "ùsdezfk%%%%",
);

// Tableau pour stocker les booléens
$booleans = array();

// Vérifier si chaque chaîne est correctement écrite
foreach ($chaines as $chaine) {
    $contains_special_characters = preg_match('/[^a-zA-Z0-9\s,\'éç!,?.-]/', $chaine);
    $is_correct = !$contains_special_characters;
    if ($is_correct) {
        $booleans[] = $is_correct;
        echo "Ceci est une phrase correcte" . "<br>";
    } else {
        echo "Ceci n'est pas une phrase correcte" . "<br>";
    }
}

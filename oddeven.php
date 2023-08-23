<?php
function calcul($i)
{
    echo "Choissez un chiffre: " . $i . "<br>";
    if (!is_numeric($i)) {
        echo "Ce n'est pas un chiffre.";
    } elseif ($i % 2 == 1) {
        echo "Le chiffre" . " " . $i . " " . "est impair" . "<br>";
    } elseif ($i % 2 == 0) {
        echo "Le chiffre" . " " . $i . " " . "est pair" . "<br>";
    } else {
        echo $i . " " . "n'est pas un nombre" . "<br>";
    }
}

calcul(5);
calcul(6);
calcul(33);
calcul("bc");

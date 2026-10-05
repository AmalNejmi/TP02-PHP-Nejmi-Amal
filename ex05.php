<?php

$moyenne = 9;
echo "<h1>Exercice 5</h1>";
echo "Note testée : $moyenne <br>";
echo "Résultat : ";

if ($moyenne < 0 || $moyenne > 20) {
    echo "Note invalide";
} elseif ($moyenne < 10) {
    echo "Non validé";
} elseif ($moyenne < 12) {
    echo "Passable";
} elseif ($moyenne < 14) {
    echo "Assez bien";
} elseif ($moyenne < 16) {
    echo "Bien";
} else {
    echo "Très bien";
}
?>

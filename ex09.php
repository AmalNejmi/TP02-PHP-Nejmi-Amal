<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Exercice 9 </title>
</head>
<body>
<h1>Exercice 9</h1>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

?>

<table border="1">
    <tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Résultat</th>
    </tr>

<?php

foreach ($notes as $etudiant => $note) {

    $somme += $note;

    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }

    echo "<tr>";
    echo "<td>" . $etudiant . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $resultat . "</td>";
    echo "</tr>";
}

$moyenne = $somme / count($notes);

?>

</table>

<h2>Résultats</h2>

<p>Somme des notes : <?php echo $somme; ?></p>

<p>Moyenne de la classe : <?php echo $moyenne; ?></p>

<p>Nombre d'étudiants validés : <?php echo $nombreValides; ?></p>

<p>
    Meilleure note :
    <?php echo $meilleureNote; ?>
    - Étudiant :
    <?php echo $meilleurEtudiant; ?>
</p>

</body>
</html>

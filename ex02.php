<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <?php
    $nom = "Nejmi";
    $prenom = "Amal";
    $age = 25;
    $formation = "Informatique appliquée";
    $presentation = "Je m'appelle " . $prenom . " " . $nom .
                    ", j'ai " . $age . " ans et je suis en " . $formation . ".";

    $presentation .= " J'apprends PHP.";

    echo "<p>$presentation</p>";

    $note = 12;
    $Note = 16;

    echo "<p>note = $note</p>";
    echo "<p>Note = $Note</p>";

    ?>
</body>
</html>

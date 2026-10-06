<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <?php
    // 1. Déclaration de la variable avec une valeur fixe (ex: 3)
     $numeroMois = 15;

    // 5. Remplacement par le mois courant du serveur
    //$numeroMois = (int) date("m");

    // 2 & 3. Structure switch pour afficher le mois correspondant
    switch ($numeroMois) {
        case 1:
            echo "Janvier";
            break;
        case 2:
            echo "Février";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Août";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Décembre";
            break;
        default:
            echo "Numéro de mois invalide";
            break;
    }
    ?>
</body>
</html>



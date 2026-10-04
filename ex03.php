<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixHTUnitaire = 60;
    $quantite = 3;
    $totalHT = $prixHTUnitaire * $quantite;
    $montantTVA = $totalHT * (TAUX_TVA / 100); 
    $totalTTC = $totalHT + $montantTVA; 
    $fraisLivraison = 15;
    $totalTTC += $fraisLivraison; 
    $tvaExiste = defined("TAUX_TVA") ? "Oui" : "Non";
    ?>
    <h2>Récapitulatif:</h2>
    <ul>
        <li>Prix unitaire HT : <?= $prixHTUnitaire ?> <?= DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li>Total HT : <?= $totalHT ?> <?= DEVISE ?></li>
        <li>Taux de TVA : <?= TAUX_TVA ?> %</li>
        <li>Montant TVA : <?= $montantTVA ?> <?= DEVISE ?></li>
        <li>Frais de livraison : <?= $fraisLivraison ?> <?= DEVISE ?></li>
        <li>Total Final TTC : <?= $totalTTC ?> <?= DEVISE ?></li>
        <li>La constante TAUX_TVA existe : <?= $tvaExiste ?></li>
    </ul>
</body>
</html>

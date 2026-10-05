<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

    <h1>Exercice 4</h1>
    <pre>
<?php
$var1 = 42;
$var2 = "42";
$var3 = 15.8;
$var4= true;
$var5 = false;
$var6 = null;

echo "\n Valeurs et leurs types:\n";

var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var5);
var_dump($var6);


echo " \n Conversions:\n";

$var2 = (int) $var2;
$var3 = (int) $var3;
$var1= (string) $var1;

echo "42 string en entier : ";
var_dump($var2);

echo "15.8 en entier : ";
var_dump($var3);

echo "42 entier en chaîne : ";
var_dump($var1);

echo "echo et var_dump";

echo "true avec echo : ";
echo $var4;

echo "\nfalse avec echo : ";
echo $var5;

echo "\ntrue avec var_dump : ";
var_dump($var5);

echo "false avec var_dump : ";
var_dump($var6);

echo "\n Conversion en booléen:\n";

$valeur1 = (bool) 0;
$valeur2 = (bool) "0";
$valeur3 = (bool) "PHP";
$valeur4 = (bool) [];

var_dump($valeur1);
var_dump($valeur2);
var_dump($valeur3);
var_dump($valeur4);
?>
    </pre>
</body>
</html>

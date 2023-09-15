<?php

//phpinfo();

/* Commentaires
 * sur
 * plusieurs
 * lignes */

echo "Test";
?>

<h1>Bienvenue, <?php echo "Nicolas!"; ?></h1>

<h2><?= "Vous êtes chez vous." ?></h2>

<?php
$variable = "Une variable";
$Variable = "Une autre variable";

$nb = (int) 5;
$nb = (float) 3.2;
$test = (bool) true;

echo "$nb<br>";
printf($nb);
var_dump($nb);
var_dump($test);
echo $test;

$camelCase = "Une variable en camel case";
$snake_case = "Une variable en snake case";
// $kebab-case = "Una variable en kebab case";
$PascalCase = "une variable en Pascal case";

$fruit1 = "Pomme";
$fruit2 = "Banane";

echo $fruit1." ".$fruit2;
echo "<p>$fruit1 $fruit2</p>";
echo "$fruit1 $fruit2";
echo "<p>$fruit1<br>$fruit2</p>";

$resultat = "";
$resultat .= "Le fruit choisi est: ";
$resultat .= $fruit1;
echo "<p>$resultat</p>";


?>

<p><?= $fruit1." - ".$fruit2 ?></p>
 <?php

$data1 = "Hello";
$data2 = "planète";
$data3 = "Mars";
$data4 = "les terriens";

echo "<p>$data1, $data4. Je viens de la $data2 $data3.</p>"
?>

<p><?= "$data1, $data4. Je viens de la $data2 $data3." ?></p>
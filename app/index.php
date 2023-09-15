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


$data1 = "Hello";
$data2 = "planète";
$data3 = "Mars";
$data4 = "les terriens";

echo "$data1, $data4. Je viens de la $data2 $data3.";

define('USER','John Doe');

define('tableau', ['client', 4, true, 4.5]);
echo "<br>";
var_dump(tableau);
echo "<br>";
var_dump(USER);

define('pi',3.141592);
var_dump(pi*2);
echo "<br>";
var_dump($GLOBALS);

$client = "Jane Done";
$formation = "architecte";
echo "<br>";
echo "$client suit une formation d'$formation";

echo "<br>";


?>

<p><?= $fruit1." - ".$fruit2 ?></p>
 <?php

$data1 = "Hello";
$data2 = "planète";
$data3 = "Mars";
$data4 = "les terriens";

echo "<p>$data1, $data4. Je viens de la $data2 $data3.</p>";

?>

<p><?= "$data1, $data4. Je viens de la $data2 $data3." ?></p;>
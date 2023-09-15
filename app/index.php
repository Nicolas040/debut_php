<?php

//phpinfo();

/* Commentaires
 * sur
 * plusieurs
 * lignes */

echo "Test";
?>

<h1>Bienvenue</h1>

<?php
$variable = "Une variable";
$Variable = "Une autre variable";

echo $Variable;

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

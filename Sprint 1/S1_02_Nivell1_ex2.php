<?php
$salutacio = "Hello world";
echo $salutacio . "\n";

$salutacio = mb_strtoupper($salutacio);
echo $salutacio . "\n";
echo strlen($salutacio) . "\n";
echo strrev($salutacio) . "\n";

echo ("\nAquest es el curs de PHP: \n" . $salutacio . ", " . strlen($salutacio) . ", " . strrev($salutacio) . ".");

?>
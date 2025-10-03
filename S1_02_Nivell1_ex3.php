<?php

// (A)
$var_X = 2;
$var_Y = 4;
$var_N = 9;
$var_M = 3;
$resultatSumaTotal = $var_X + $var_Y + $var_M + $var_N;
$resultatMulti = $var_X * $var_Y * $var_M * $var_N;

echo "Valor de X és: " . $var_X . "\n" . "Valor de Y és: " . $var_Y . "\n" . 
"La suma de X i Y és: " . ($var_X + $var_Y) . "\n" . "La resta de X i Y és: " . ($var_X - $var_Y) . "\n" .
"El producte de X i Y és: " . ($var_X * $var_Y) . "\n" . "El mòdul de X i Y és: " . ($var_X / $var_Y) . "\n";

echo "---------------------------- \n";

echo "Valor de N és: " . $var_N . "\n" . "Valor de M és: " . $var_M . "\n" . "La suma de N i M és: " . ($var_N + $var_M) . "\n" . 
"La resta de N i M és: " . ($var_N - $var_M) . "\n" . "El producte de N i M és: " . ($var_N * $var_M) . "\n" . 
"El mòdul de N i M és: " . ($var_N / $var_M) . "\n";

echo "---------------------------- \n";

echo "El doble de X és: " . ($var_X * 2) . "\nEl doble de Y és: " . ($var_Y * 2) . "\nEl doble de N és: " . ($var_N * 2) .
"\nEl doble de M és: " . ($var_M * 2) . "\nLa suma de totes les variables (" . $var_X . "+" . $var_Y . "+" . $var_M . "+" . $var_N .
") és: " . $resultatSumaTotal . "\nEl producte de totes les variables (" . $var_X . "+" . $var_Y . "+" . $var_M . "+" . $var_N .
") és: " . $resultatMulti . "\n";;

// (B)
function opAritmetica ($primerNum, $segonNum, $operador){
    $tipusOperacio = 0;

    switch(strtolower($operador)){
        case "suma":
            $resultat = $primerNum + $segonNum;
            echo "El resultat és: " . $resultat;
            break;
        case "resta":
            $resultat = $primerNum - $segonNum;
            echo "El resultat és: " . $resultat;
            break;
        case "multiplica":
            $resultat = $primerNum * $segonNum;
            echo "El resultat és: " . $resultat;
            break;
        case "divideix":
            $resultat = $primerNum / $segonNum;
            echo "El resultat és: " . $resultat;
            break;
        default :
            $resultat = "Error. Selecciona una opció: suma / resta / multiplica / divideix.";
    }
    return $resultat;
}
echo "---------------------------- \n";
opAritmetica(5,2,"suma");
echo "\n";
opAritmetica(5,2,"resta");
echo "\n";
opAritmetica(5,2,"multiplica");
echo "\n";
opAritmetica(5,2,"divideix");



?>
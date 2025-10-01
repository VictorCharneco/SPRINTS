<?php

/*
Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. 
En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). 
D'aquestes puntuacions necessitarem:

    La seva suma
    La seva mitjana
    La classificació. Sent  "Principiant" menor de 4000. 
                            "Intermedi" menor de 8000 
                            "Professional" la resta.
Pensa a fer més d'una funció per resoldre aquest problema.
*/

const PUNTUACIONS = 3;

function calculSuma($puntU, $puntDos, $puntTres){
    return $puntU + $puntDos + $puntTres;
}

function calculMitjana($calculSuma){
    return $calculSuma / PUNTUACIONS;
}

function puntsClassificacio($calculMitjana){
    if($calculMitjana < 4000){
        return "PRINCIPIANT";
    }elseif($calculMitjana < 8000){
        return "INTERMEDI";
    }else{
        return "PROFESSIONAL";
    }
}

$puntU = 2300;
$puntDos = 150;
$puntTres = 4633;

$suma = calculSuma($puntU, $puntDos, $puntTres);
$mitjana = calculMitjana($suma);
$classificacio = puntsClassificacio($mitjana);

echo "Els teus punts (" . $puntU . " - " . $puntDos . " - " . $puntTres . ")" . " fan un total de: " . 
$suma . ".\nLa mitjana és de " . $mitjana . " punts i per tant, ets a la Categoria " . $classificacio . "."

?>
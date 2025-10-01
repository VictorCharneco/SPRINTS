<?php

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
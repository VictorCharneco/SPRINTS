<?php

define("PUNTUACIONS", 3);

function calculSuma(array $punts){
    return array_sum($punts);
}

function calculMitjana(array $punts){
    $total = count($punts);
    if($total === 0){
        return 0;
    }else{
        return array_sum($punts) / $total;
    }
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

$punts = [2300, 100, 4633];

$suma = calculSuma($punts);
$mitjana = calculMitjana($punts);
$classificacio = puntsClassificacio($mitjana);

echo "Els teus punts son: " . implode (", ", $punts) . "\n";
echo "El total de punts és: $suma \n"; 
echo "La mitjana és de " . $mitjana . " punts i per tant, ets a la Categoria " . $classificacio . "."

?>

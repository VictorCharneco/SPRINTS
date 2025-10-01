<?php

// CAda trucada que duri menys de 3 minuts té un cost de 10 centims
// Cada minut adicional a partir dels 3 primers és un pas de compatador i costa 5 cntms

function costTrucada($duracio){
$minGratis = 3;
$calcul = ($duracio - $minGratis) * 0.5;

    if($duracio <= 0){
        return "ERROR. Indica els minuts de la trucada.";
    }elseif($duracio > 3){
        return "El cost de la trucada és: " . $calcul;
    }else{
        return "La teva trucada no té cost adicional.";
    }
}

echo costTrucada(5) . "\n";
echo costTrucada(3) . "\n";
echo costTrucada(0) . "\n";

?>
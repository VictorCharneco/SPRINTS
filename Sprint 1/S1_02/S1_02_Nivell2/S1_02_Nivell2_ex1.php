<?php

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
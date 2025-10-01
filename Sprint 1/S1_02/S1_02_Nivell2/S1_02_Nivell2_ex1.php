<?php

const MIN_GRATIS = 3;

function costTrucada($duracio){
$calcul = ($duracio - MIN_GRATIS) * 0.5;

    if($duracio <= 0){
        return "/!\ ERROR. Indica els minuts de la trucada.";
    }elseif($duracio > 3){
        return "El cost de la trucada és: " . $calcul . " euros.";
    }else{
        return "La teva trucada no té cost adicional.";
    }
}

echo costTrucada(16) . "\n";
echo costTrucada(3) . "\n";
echo costTrucada(0) . "\n";

?>
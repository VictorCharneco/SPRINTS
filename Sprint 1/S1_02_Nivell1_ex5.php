<?php

function verificarGrau($nota){
    if($nota < 0 || $nota > 100){
        return "ERROR: La nota ha d'estar entre 0 i 100";
    }elseif($nota >= 60){
        return "Primera Divisió";
    }elseif($nota >= 45){
        return "Segona Divisió";
    }elseif($nota >= 33){
        return "Tercera Divisió";
    }else{
        return "L'estudiant reprovarà";
    }
}

echo verificarGrau(70);
echo "\n";
echo verificarGrau(50);
echo "\n";
echo verificarGrau(40);
echo "\n";
echo verificarGrau(20);

?>
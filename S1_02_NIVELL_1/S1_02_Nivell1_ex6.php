<?php

function isBitten(){
    $numRandom = rand(0,1);
    return $numRandom === 1;
}

if(isBitten()){
    echo "T'ha mossegat el dit!!!";
}else{
    echo "Uiii! Encara tens dit!";
}



?>
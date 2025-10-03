<?php

function compteDeterminat($numDeterminat = 10, $interval = 2){
    for($i = 0; $i <= $numDeterminat; $i += $interval){
        echo $i . " - ";
    }
}

compteDeterminat();
echo "\n";
compteDeterminat(20,5);


?>
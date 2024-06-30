<?php

$numeri = [];

while (count($numeri) < 15) {
    $numero = random_int(1, 100);

    if (in_array($numero, $numeri) == false){
        array_push($numeri, $numero);
    };

};

foreach($numeri as $numero) {
    echo $numero . '<br>';
};
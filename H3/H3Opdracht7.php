<?php

$zwemscholen = array('De spartelkuikens' => '25', 'De waterbuffels' => '32', 'Plonsmderin' => '11',
    'Bommetje' => '23');

$plaatje = 0;

foreach ($zwemscholen as $item => $value) {
    $uitkomt = floor($value / 5);
    echo $item . " " . $value;
    for ($plaatje = 0; $plaatje < $uitkomt; $plaatje++) {
        echo " <img src=\"/images/zwem.png\"> ";
    }
    echo  "<br>";
}


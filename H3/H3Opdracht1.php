<?php

$plaatje = 1;

while ($plaatje < 11) {
    $aapplaatje = '/images/aap' . $plaatje . '.jpg';
    echo "<img src=".$aapplaatje.">";
    $plaatje++;
}
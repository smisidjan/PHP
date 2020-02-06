<?php

for ($plaatje = 1; $plaatje < 11; $plaatje++) {
    $aapplaatje = '/images/aap' . $plaatje . '.jpg';
    if ($plaatje % 2 == 1) {
        echo "<img src =\"$aapplaatje\" style = \"border: 5px solid green\">";
    } else {
        echo "<img src = \"$aapplaatje\" style = \"border: 5px solid red\">";
    }
}


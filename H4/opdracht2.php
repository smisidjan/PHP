<?php

function delenDoor3($getal) {

    $uitkomst = $getal / 3;
    if (is_int($uitkomst)) {
        return ('TRUE');
    }else {
        return ('FALSE');
    }
}

echo delenDoor3(29);
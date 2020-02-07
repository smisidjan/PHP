<?php

include('beasties.html');

if (isset($_POST['knop'])) {

    $dieren = $_POST['dieren'];
    $tijger = "<img src=\"/images/tijger.jpg\">";
    $panda = "<img src=\"/images/panda.jpg\">";
    $olifant = "<img src=\"/images/olifant.jpg\">";


    switch ($dieren) {
        case "tijger":
            echo $tijger;
            break;
        case "panda":
            echo $panda;
            break;
        case "olifant":
            echo $olifant;
            break;
        default:
            echo "U heeft niks ingevoerd!";
    }
}

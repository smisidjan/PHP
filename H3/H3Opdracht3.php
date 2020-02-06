<?php

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10 - $i; $j++) {
        echo " ";
    }
    echo "<br>";
    for ($k = 0; $k < (2 * $i + 1); $k++) {
        echo " * ";

        echo " ";

    }
}


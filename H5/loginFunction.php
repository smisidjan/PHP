<?php

function login() {
    $loginGegevens = array('piet@worldonline.nl' => 'doetje123', 'klaas@carpets.nl' => 'snoepje777',
        'truushendriks@wegweg.nl' => 'arkiearkie201');


    foreach ($loginGegevens as $item => $value) {
        if ($_POST['email'] == $item && $_POST['wachtwoord'] == $value) {
            return true;
        }
    }
    return false;
}

if (login()) {
    echo "Welkom!";
} else {
    echo "Sorry, geen toegang!";
}

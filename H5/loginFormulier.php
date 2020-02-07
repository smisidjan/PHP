<?php

if (isset($_POST['knop'])) {
    $loginGegevens = array('piet@worldonline.nl' => 'doetje123', 'klaas@carpets.nl' => 'snoepje777',
        'truushendriks@wegweg.nl' => 'arkiearkie201');

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];


    foreach ($loginGegevens as $item => $value) {

        if ($email == $item and $wachtwoord == $value) {
            echo "Welkom!";
            break;
        }
        else {
            echo "Sorry, geen toegang!";
            break;
        }

    }
}

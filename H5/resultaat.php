<?php

include("form.html");

if (isset($_GET['verstuur'])) {
    $naam = $_GET['inlognaam'];
    $wachtwoord = $_GET['wachtwoord'];

}

print_r($_GET);

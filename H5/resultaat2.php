<?php

include('form2.html');

if (isset($_POST)) {
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $foutmelding = "";
    $fout = false;

    if (empty($naam)) {
        $foutmelding = $foutmelding . "Uw naam is niet ingevuld.<br>";
        $fout = true;
    }
    if (empty($adres)) {
        $foutmelding = $foutmelding . "Uw adres is niet ingevuld.<br>";
        $fout = true;
    }
    if (empty($email)) {
        $foutmelding = $foutmelding . "Uw email is niet ingevuld.<br>";
        $fout = true;
    }
    if (empty($wachtwoord)) {
        $foutmelding = $foutmelding . "Uw wachtwoord is niet ingevuld.<br>";
        $fout = true;

    }
    if ($fout == true) {
        print "Er is iets fout gegaan: $foutmelding";
    } else {
        print "Naam: $naam<br>";
        print "Adres: $adres<br>";
        print "Email: $email<br>";
    }
}

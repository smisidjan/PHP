<?php

$host = 'localhost';
$user = 'root';
$pass = '';

$gebruikersnaam = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

$dbh = new PDO('mysql:host=localhost; dbname=schoolphp; port=3308', $user, $pass);

$inloggen = $dbh->query("select * from gebruiker where gebruikersnaam ='$gebruikersnaam' and wachtwoord = '$wachtwoord'")
    or die("Error while searching");

if ($inloggen->fetch()) {
    echo "Welkom!";
} else {
    echo "Sorry geen toegang!";
}
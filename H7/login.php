<?php

session_start();

$_SESSION['email'] = "test@email.nl";

print_r($_SESSION);
$_SESSION['gebruiker'] = "Administrator";
echo $_SESSION['gebruiker'];

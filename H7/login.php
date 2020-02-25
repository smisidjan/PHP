<?php
session_start();

$gebruikers = array(
    "test@test.nl" => array("wachtwoord" => "test", "rol" => "administrator"),
    "klaas@carpets.nl" => array("wachtwoord" => "snoepje777", "rol" => "gebruiker"),
    "piet@worldonline.nl" => array("wachtwoord" => "doetje123", "rol" => "gebruiker"),
    "truushendriks@wegweg.nl" => array("wachtwoord" => "arkiearkie12", "rol" => "administrator")
);

if (isset($_POST['knop'])
    && isset($gebruikers[$_POST["email"]])
    && $gebruikers[$_POST["email"]] ["wachtwoord"] == $_POST['wachtwoord']) {
    $_SESSION["gebruiker"] = array("naam" => $_POST["email"],
                                    "wachtwoord" => $gebruikers[$_POST["email"]]["wachtwoord"],
                                    "rol" => $gebruikers[$_POST["email"]]["rol"]);

    $message = "<h2>Welkom " . $_SESSION["gebruiker"]["naam"]." op de website met de rol "
        .$_SESSION["gebruiker"]["rol"]."</h2>";
    echo $message;
    echo "<p></p><a href=\"admin.php\">Beveiligde pagina</a></p>";
    echo "<p><a href=\"login.html\">uitloggen</a></p>";
} else {
    header("login.html");
}


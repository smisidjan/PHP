<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="bakkerijVlecht.css" rel="stylesheet">
    <link href="formulier.php">
</head>
<body>
<header>
    <img src="../images/bakkerijHeader.jpg" alt="header"><br><br>
    <a href="bakkerijVlecht.php">Overzicht broodjes</a>
    <a href="formulier.php">Broodjes toegvoegen</a>
</header>
<h1>Broodjes weergeven</h1>
<p>Informatie van de verschillende broodjes</p>
<?php
require "Broodoverzicht.php";
require "Brood.php";

$bestand = isset($_POST['bestanden']) && !empty($_POST['bestanden'])? $_POST['bestanden'] : "Geen bestand toegevoegd";
$meel = isset($_POST['meelsoort']) && !empty($_POST['meelsoort']) ? $_POST['meelsoort'] : "";
$vorm = isset($_POST['vorm']) && !empty($_POST['vorm']) ? $_POST['vorm'] : "";
$gewicht = isset($_POST['gewicht']) && !empty($_POST['gewicht']) ? $_POST['gewicht'] : "";

$broodjes = new Broodoverzicht();
if (isset($_POST['submit'])) {
    $broodjes->voegBroodToe($bestand, $meel, $vorm, $gewicht);
}
?>
<table>
    <tr>
        <th>Bestand</th>
        <th>Soort meel</th>
        <th>Vorm brood</th>
        <th>Gewicht</th>
    </tr>
    <?php
    foreach ($broodjes->getBroodLijst() as $brood) {
        echo "<tr>";
        if (isset($_POST['bestanden'])) {
            echo "<th>".'<img src="../images/'.$brood->getBestand().'">'."</th>";
        } else {
            echo "<th>". "Geen bestand toegevoegd." ."</th>";
        }
        echo "<th>".$brood->getMeel()."</th>";
        echo "<th>".$brood->getVorm()."</th>";
        echo "<th>".$brood->getGewicht()."</th>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
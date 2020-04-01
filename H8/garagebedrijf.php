<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="garagebedrijf.css" rel="stylesheet">
</head>
<body>
<header>
    <img src="../images/autoheader.png">
</header>
<div>
    <form action="garagebedrijf.php" method="get">
        <label>Merk:</label>
        <select name="automerk">
            <option name="allemerken" value="allemerken">--Alle merken--</option>
            <option name="Audi" value="Audi">Audi</option>
            <option name="Ferrari" value="Ferrari">Ferrari</option>
            <option name="Fiat" value="Fiat">Fiat</option>
            <option name="Mercedes" value="Mercedes">Mercedes</option>
            <option name="Opel" value="Opel">Opel</option>
            <option name="Volkswagen" value="Volkswagen">Volkswagen</option>
        </select>
        <label>Minimale prijs:</label>
        <input type="text" id="minPrijs" name="minPrijs">
        <label>Maximale prijs:</label>
        <input type="text" id="maxPrijs" name="maxPrijs">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    require "Autooverzicht.php";
    require "Auto.php";

    $autoos = new Autooverzicht();

    $autoMerk = isset($_GET['automerk']) ? $_GET['automerk'] : ['allemerken'];
    $minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $_GET['minPrijs'] : 0;
    $maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $_GET['maxPrijs'] : 99999999;

    foreach ($autoos->getGefilterdeLijst($minPrijs, $maxPrijs, $autoMerk) as $auto) {
        echo $auto->getMerk() . '  € ' . $auto->getPrijs() . '<br>';
        echo '<img src="' . $auto->getUrl() .'"><br>';
    }

    ?>


</div>
</body>
</html>
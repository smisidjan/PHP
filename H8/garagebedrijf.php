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
    <form action="garagebedrijf.php" method="post">
        <label>Merk:</label>
        <select name="auto">
            <option name="allemerken" value="alle merken">--Alle merken--</option>
            <option name="audi" value="audi">Audi</option>
            <option name="ferrari" value="ferrari">Ferrari</option>
            <option name="fiat" value="fiat">Fiat</option>
            <option name="mercedes" value="mercedes">Mercedes</option>
            <option name="opel" value="opel">Opel</option>
            <option name="volkswagen" value="volkswagen">Volkswagen</option>
        </select>
        <label>Minimale prijs:</label>
        <input type="text" id="minprijs" name="minprijs">
        <label>Maximale prijs:</label>
        <input type="text" id="maxprijs" name="maxprijs">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    include "Autooverzicht.php";
    include "Auto.php";

    $audiR8 = new Auto("Audi", "R8", "€ 240 940.00", "../images/AudiR8.png");
    $audiQ5 = new Auto("Audi", "Q5", "€ 59 700.00", "../images/AudiQ5.jpg");
    $ferrari488 = new Auto("Ferrari", "488", "€ 298 091.00", "../images/Ferrari488.jpg");
    $ferrariRoma = new Auto("Ferrari", "Roma", "€ 2 244 737.00", "../images/FerrariRoma.jpg");
    $ferrari812 = new Auto("Ferrari", "812", "€ 393 865.00", "../images/Ferrari812.jpg");
    $fiat500 = new Auto("Fiat", "500", "€ 15 735.00", "../images/Fiat500.jpg");
    $fiat500C = new Auto("Fiat", "500C", "€ 18 735.00", "../images/Fiat500C.jpg");
    $mercedesBenzGLA = new Auto("Mercedes", "Benz GLA", "€ 37 798.00", "../images/MercedesBenzGLA.jpg");
    $mercedesBenzEQC = new Auto("Mercedes", "Benz EQC", "€ 76 835.00", "../images/MercedesBenzEQC.jpg");
    $opelAstra = new Auto("Opel", "Astra", "€ 23 800.00", "../images/OpelAstra.jpg");
    $opelCorsa = new Auto("Opel", "Corsa", "€ 16 100.00", "../images/OpelCorsa.jpg");
    $volkswagenGolf8 = new Auto("Volkswagen", "Golf 8", "€ 36 782.00", "../images/VolkswagenGolf8.jpg");
    $volkswagenPolo = new Auto("Volkswagen", "Polo", "€ 17 500.00", "../images/VolkswagenPolo.jpg");


    $ditautooverzicht = new Autooverzicht();
    $ditautooverzicht->voegAutoToe($audiR8);
    $ditautooverzicht->voegAutoToe($audiQ5);
    $ditautooverzicht->voegAutoToe($ferrari488);
    $ditautooverzicht->voegAutoToe($ferrariRoma);
    $ditautooverzicht->voegAutoToe($ferrari812);
    $ditautooverzicht->voegAutoToe($fiat500);
    $ditautooverzicht->voegAutoToe($fiat500C);
    $ditautooverzicht->voegAutoToe($mercedesBenzGLA);
    $ditautooverzicht->voegAutoToe($mercedesBenzEQC);
    $ditautooverzicht->voegAutoToe($opelAstra);
    $ditautooverzicht->voegAutoToe($opelCorsa);
    $ditautooverzicht->voegAutoToe($volkswagenGolf8);
    $ditautooverzicht->voegAutoToe($volkswagenPolo);


    if (['allemerken']) {
        foreach ($ditautooverzicht->getAutolijst() as $autooverzicht) {
            echo "<p>$autooverzicht->merk $autooverzicht->type " . $autooverzicht->prijs . "</p>";
            echo "<p><img src=$autooverzicht->url></p>";
        }
    }

    if (['submit']) {
        foreach ($autooverzicht->getGefilterdeLijst() as $gefilterdelijst) {
            echo "<p>$autooverzicht->merk $autooverzicht->type " . $autooverzicht->prijs . "</p>";
            echo "<p><img src=$autooverzicht->url></p>";
        }
    }



    ?>
</div>
</body>
</html>
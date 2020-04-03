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
<?php
require "Autooverzicht.php";
require "Auto.php";


$autoMerk = isset($_POST['automerk']) ? $_POST['automerk'] : 'allemerken';
$minPrijs = isset($_POST['minPrijs']) && !empty($_POST['minPrijs']) ? $_POST['minPrijs'] : 0;
$maxPrijs = isset($_POST['maxPrijs']) && !empty($_POST['maxPrijs']) ? $_POST['maxPrijs'] : 99999999;


// https://html.form.guide/php-form/php-form-select.html
//https://www.vasiljevski.com/blog/php/how-to-set-the-selected-option-of-select-tag-from-the-php/

?>

<div>
    <form action="garagebedrijf.php" method="post">
        <label>Merk:</label>
        <select name="automerk">
            <option id="allemerken" name="allemerken" value="allemerken">--Alle merken--</option>
            <option <?php if ($autoMerk == 'Audi') echo 'selected = "selected"'; ?> name="Audi" value="Audi">Audi
            </option>
            <option <?php if ($autoMerk == 'Ferrari') echo 'selected = "selected"'; ?>name="Ferrari" value="Ferrari">
                Ferrari
            </option>
            <option <?php if ($autoMerk == 'Fiat') echo 'selected = "selected"'; ?>name="Fiat" value="Fiat">Fiat
            </option>
            <option <?php if ($autoMerk == 'Mercedes') echo 'selected = "selected"'; ?>name="Mercedes" value="Mercedes">
                Mercedes
            </option>
            <option <?php if ($autoMerk == 'Opel') echo 'selected = "selected"'; ?>name="Opel" value="Opel">Opel
            </option>
            <option <?php if ($autoMerk == 'Volkswagen') echo 'selected = "selected"'; ?>name="Volkswagen"
                    value="Volkswagen">Volkswagen
            </option>
        </select>
        <label>Minimale prijs:</label>
        <input type="text" id="minPrijs" name="minPrijs" value="<?php if (isset($_POST['submit'])) echo $minPrijs ?>">

        <label>Maximale prijs:</label>
        <input type="text" id="maxPrijs" name="maxPrijs" value="<?php if (isset($_POST['submit'])) echo $maxPrijs ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php

$autoos = new Autooverzicht();

if ($autoMerk != 'allemerken') {
    foreach ($autoos->getGefilterdeLijst($minPrijs, $maxPrijs, $autoMerk) as $auto) {
        echo $auto->getMerk() . '  € ' . $auto->getPrijs() . '<br>';
        echo '<img src="' . $auto->getUrl() . '"><br>';
    }
} else {
    foreach ($autoos->getAutolijst($minPrijs, $maxPrijs) as $auto) {
        echo $auto->getMerk() . '  € ' . $auto->getPrijs() . '<br>';
        echo '<img src="' . $auto->getUrl() . '"><br>';
    }
}

?>
</body>
</html>
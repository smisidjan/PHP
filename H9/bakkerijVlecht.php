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
    <img src="../images/bakkerijHeader.jpg"><br><br>
    <a href="bakkerijVlecht.php">Overzicht broodjes</a>
    <a href="formulier.html">Broodjes toegvoegen</a>
</header>

<h1>Broodjes weergeven</h1>
<p>Informatie van de verschillende broodjes</p>

<table>
    <tr>
        <th>Soort meel</th>
        <th>Vorm brood</th>
        <th>Gewicht</th>
    </tr>
    <?php

    include "Brood.php";

    $bestand = isset($_POST['bestanden']) && !empty($_POST['bestanden']) ? $_POST['bestanden'] : null;
    $meel = isset($_POST['meelsoort']) && !empty($_POST['meelsoort']) ? $_POST['meelsoort'] : null;
    $vorm = isset($_POST['vorm']) && !empty($_POST['vorm']) ? $_POST['vorm'] : null;
    $gewicht = isset($_POST['gewicht']) && !empty($_POST['gewicht']) ? $_POST['gewicht'] : null;

    $dataArray = array();

   $formuliervelden = array('bestanden', 'meelsoort', 'vorm', 'gewicht');
   


    ?>
</table>

</body>
</html>
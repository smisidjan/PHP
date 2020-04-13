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
    <a href="formulier.html">Broodjes toegvoegen</a>
</header>

<h1>Broodjes weergeven</h1>
<p>Informatie van de verschillende broodjes</p>

<?php
require "formulier.php";
require "Brood.php";
require "Broodoverzicht.php";


$values = isset($_POST['form']) ? $_POST['form'] : "";
var_dump($values);
?>

<table>
    <tr>
        <th>Soort meel</th>
        <th>Vorm brood</th>
        <th>Gewicht</th>
    </tr>
    <?php

    ?>

</table>

</body>
</html>
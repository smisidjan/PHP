<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monkey Business</title>
    <link href="monkey.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <img src="/images/monkey-business.jpg">
    <h1>select your monkey!</h1>
    <img class="aap" src="/images/monkey_swings.png">
</header>
<article>
<?php
include "getApen.php";

$apen = new Aap();

foreach ($apen->getApenNamen() as $naam) {
    echo "<p><a href='https://www.google.nl/search?q=$naam&tbm=isch'>$naam</a></p>";
}

?>
</article>

</body>
</html>
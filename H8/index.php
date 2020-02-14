<?php

include_once('Programma.php');
include_once('liedje.php');

$ditprogramma = new Radioprogramma();
$ditprogramma->setProgrammanaam("mijn eerste programma");
$ditprogramma->setOmschrijving("even testen");

foreach ($ditprogramma->getProgramma() as $p) {
    echo $p."<br>";
}

echo "<br>";
$nieuwliedje = new Liedje("dit is de titel", "beyonce knowles");
echo $nieuwliedje->getTitel()."<br>";
echo $nieuwliedje->getArtiest();

$ditprogramma->voegLiedjeToe($nieuwliedje);
echo "<br>";
echo "<br>";

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
}

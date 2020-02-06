<?php

$leeftijd = 12;
$bedrag = 10;

if ($leeftijd > 65) {
    $bedrag /= 2;
} if ($leeftijd <= 12) {
    $bedrag /= 2;
} if ($leeftijd < 3) {
    $bedrag = 0;
}

echo $bedrag;

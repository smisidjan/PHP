<?php

$images = array('/images/img_0050.jpg', '/images/lillypilly1.jpg', '/images/Maranchery_Biyyam_Kayal_kandal.jpg',
    '/images/weeping-elm.jpg', '/images/weeping-elm0091.jpg');

for ($i = 0; $i < 5; $i++) {
    echo "<img src=" . $images[$i].">";
}



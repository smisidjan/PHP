<?php
session_start();

if (isset($_POST['submit'])) {


    $nieuweautooverzicht = new Autooverzicht();

    foreach ($nieuweautooverzicht->getGefilterdeLijst() as $nieuwautooverzicht) {
        echo "<p>$nieuweautooverzicht->merk $nieuweautooverzicht->type ".$nieuweautooverzicht->prijs."</p>";
        echo "<p><img src=$nieuweautooverzicht->url></p>";
    }

}
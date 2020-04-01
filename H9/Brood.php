<?php

class Brood {

    public function voegBroodToe($bestanden, $meel, $vorm, $gewicht) {

        if (isset($_POST['submit'])) {
            $broodjes = array($bestanden, $meel, $vorm, $gewicht);
            return $broodjes;
        }
    }

}

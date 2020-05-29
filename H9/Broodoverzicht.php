<?php


class Broodoverzicht
{
    private $broodjes = array();

    function __construct()
    {
        $this->broodjes = [
            new Brood( "brood1.jfif", "tarwemeel", "bol", "50g"),
            new Brood( "brood2.jfif", "roggemeel", "bol", "40g")
        ];
    }

    public function voegBroodToe($bestand, $meel, $vorm, $gewicht)
    {
        $newBrood = new Brood($bestand, $meel, $vorm, $gewicht);
        $this->broodjes[] = $newBrood;
    }

    public function getBroodlijst()
    {
        $broodLijst = [];
        foreach ($this->broodjes as $brood) {
            if (isset($_POST['submit'])) {
                $broodLijst[] = $brood;

            }
        }
        return $broodLijst;
    }

}
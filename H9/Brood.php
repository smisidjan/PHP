<?php

class Brood {

    public $bestand;
    public $meel;
    public $vorm;
    public $gewicht;


    function __construct($bestand, $meel, $vorm, $gewicht)
    {
        $this->bestand = $bestand;
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    public function setBestand($bestand)
    {
        $this->bestand = $bestand;
    }


    public function setMeel($meel)
    {
        $this->meel = $meel;
    }


    public function setVorm($vorm)
    {
        $this->vorm = $vorm;
    }


    public function setGewicht($gewicht)
    {
        $this->gewicht = $gewicht;
    }



    public function getBestand()
    {
        return $this->bestand;
    }

    public function getMeel()
    {
        return $this->meel;
    }

    public function getVorm()
    {
        return $this->vorm;
    }

    public function getGewicht()
    {
        return $this->gewicht;
    }




}
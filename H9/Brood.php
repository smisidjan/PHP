<?php

class Brood {

    private $bestand;
    private $meel;
    private $vorm;
    private $gewicht;


    function __construct($bestand, $meel, $vorm, $gewicht)
    {
        $this->bestand = $bestand;
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    /**
     * @return mixed
     */
    public function getBestand($bestand)
    {
        $this->bestand = $bestand;
        return $this->bestand;
    }

    /**
     * @return mixed
     */
    public function getMeel($meel)
    {
        $this->meel = $meel;
        return $this->meel;
    }

    /**
     * @return mixed
     */
    public function getVorm($vorm)
    {
        $this->vorm = $vorm;
        return $this->vorm;
    }

    /**
     * @return mixed
     */
    public function getGewicht($gewicht)
    {
        $this->gewicht = $gewicht;
        return $this->gewicht;
    }




}
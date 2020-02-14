<?php

class Radioprogramma {
    private $programmanaam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje) {
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes(){
        return $this->liedjes;
    }

    /**
     * geeft programma informatie terug
     * @return array
     */
    public function getProgramma() {
        return array("programmanaam" => $this->programmanaam,
            "omschrijving" => $this->omschrijving);
    }

    /**
     * Geeft het programma een naam
     * @param, de naam als string
     */
    function setProgrammanaam($programmanaam) {
        if (strlen($programmanaam)>=2) {
            $this->programmanaam = $programmanaam;
        }
    }

    /**
     * Geeft het programma een omschrijving
     * @param, de omschrijving als string
     */
    function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }

    /**
     * Rerourneert programmanaam
     *
     */
    function getProgrammanaam() {
        return $this->programmanaam;
    }

    /**
     * Rerourneert de omschrijving
     *
     */
    function getOmschrijving() {
        return $this->omschrijving;
    }
}


<?php

class Brood {

    private $broodje;


    function __construct()
    {
        $this->broodje = [
            $meel = $_POST['meelsoort'],
            $vorm = $_POST['vorm'],
            $gewicht = $_POST['gewicht']
        ];
    }

    /**
     * @return array
     */
    public function getBroodje()
    {
        return $this->broodje;
    }
}
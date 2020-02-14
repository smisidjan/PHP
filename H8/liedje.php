<?php

class Liedje {
    private $titel;
    private $artiest;

    function __construct($titel, $artiest) {
        $this->titel = $titel;
        $this->artiest = $artiest;
    }

    /**
     *
     */
    public function getTitel() {
       return $this->titel;
    }

    public function setTitel($titel) {
        $this->titel = $titel;
        return $this;
    }

    public function getArtiest() {
        return $this->artiest;
    }

    public function setArtiest($artiest) {
        $this->artiest = $artiest;
        return $this;
    }

}

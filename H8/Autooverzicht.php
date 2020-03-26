<?php
 session_start();


class Autooverzicht
{
    public $autolijst = array();

    public function voegAutoToe($auto)
    {
        $this->autolijst[] = $auto;
    }

    public function getAutolijst()
    {
        return $this->autolijst;
    }

    function getGefilterdeLijst($selected, $autooverzicht)
    {
        if ($selected == $autooverzicht->merk) {
            echo $autooverzicht;
        }

    }

}



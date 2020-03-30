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

    function getGefilterdeLijst($merk)
    {
        $selectielijst = array();
        $merk = $_POST['submit'];

        if ($merk == $this->autolijst['merk']) {

        }


    }

}



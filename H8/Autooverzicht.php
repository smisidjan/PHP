<?php


class Autooverzicht
{
    private $autoos;

    function __construct()
    {
        $this->autoos = [
            new Auto("Audi", "R8", 240940.00, "../images/AudiR8.png"),
            new Auto("Audi", "Q5", 59700.00, "../images/AudiQ5.jpg"),
            new Auto("Ferrari", "488", 298091.00, "../images/Ferrari488.jpg"),
            new Auto("Ferrari", "Roma", 2244737.00, "../images/FerrariRoma.jpg"),
            new Auto("Ferrari", "812", 393865.00, "../images/Ferrari812.jpg"),
            new Auto("Fiat", "500", 15735.00, "../images/Fiat500.jpg"),
            new Auto("Fiat", "500C", 18735.00, "../images/Fiat500C.jpg"),
            new Auto("Mercedes", "Benz GLA", 37798.00, "../images/MercedesBenzGLA.jpg"),
            new Auto("Mercedes", "Benz EQC", 76835.00, "../images/MercedesBenzEQC.jpg"),
            new Auto("Opel", "Astra", 23800.00, "../images/OpelAstra.jpg"),
            new Auto("Opel", "Corsa", 16100.00, "../images/OpelCorsa.jpg"),
            new Auto("Volkswagen", "Golf 8", 36782.00, "../images/VolkswagenGolf8.jpg"),
            new Auto("Volkswagen", "Polo", 17500.00, "../images/VolkswagenPolo.jpg"),
        ];
    }

    public function voegAutoToe($merk, $type, $prijs, $url)
    {
        $newAuto = new Auto($merk, $type, $prijs, $url);
        $this->autoos[] = $newAuto;
    }

    public function getAutolijst($minPrijs, $maxPrijs)
    {
        $autoLijst = [];
        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs) {
                $autoLijst[] = $auto;
            }
        }
        return $autoLijst;
    }

    public function getGefilterdeLijst($minPrijs, $maxPrijs, $autoMerk)
    {
        $gefilterdeLijst = [];
        foreach ($this->autoos as $auto) {
            if ($auto->getMerk() == $autoMerk && $auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs) {
                $gefilterdeLijst[] = $auto;
            }
        }
        return $gefilterdeLijst;
    }
}










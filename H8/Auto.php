<?php

class Auto
{
    private $merk;
    private $type;
    private $prijs;


    function __construct($merk, $type, $prijs, $url)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    /**
     * @param mixed $merk
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $prijs
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}


<?php

class NationalCall extends Call
{

    protected $town;

    public function __construct($duration, $town)
    {
        parent::__construct($duration);
        $this->town = $town;
        $this->CalculateCost();
    }

    protected function CalculateCost()
    {
        switch ($this->town) {
            case "Wilde":
            case "Gerli":
            case "Dock Sud":
                $this->cost = $this->duration * 0.15;
                break;
            case "Bernal":
            case "Don Bosco":
            case "Solano":
                $this->cost = $this->duration * 0.20;
                break;
            case "Banfield":
            case "Temperley":
            case "Turdera":
                $this->cost = $this->duration * 0.25;
                break;
            default:
                $this->cost = $this->duration * 0.30;
                break;
        }
    }
}

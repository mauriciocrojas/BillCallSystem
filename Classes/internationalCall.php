<?php

class InternationalCall extends Call
{
    protected $country;

    public function __construct($duration, $country)
    {
        parent::__construct($duration);
        $this->country = $country;
        $this->CalculateCost();
    }

    protected function CalculateCost()
    {
        switch ($this->country) {
            case "Uruguay":
                $this->cost = $this->duration * 0.50;
                break;
            case "Paraguay":
                $this->cost = $this->duration * 0.60;
                break;
            case "Chile":
                $this->cost = $this->duration * 0.70;
                break;
            case "Bolivia":
                $this->cost = $this->duration * 0.80;
                break;
            default:
                $this->cost = $this->duration * 1.00;
                break;
        }
    }
}

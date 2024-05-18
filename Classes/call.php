<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

require_once "localCall.php";
require_once "nationalCall.php";
require_once "internationalCall.php";

class Call
{
    protected $duration;
    protected $cost;

    public function __construct($duration)
    {
        $this->duration = $duration;
        $this->CalculateCost();
    }

    public function GetCosto()
    {
        return $this->cost;
    }

    protected function CalculateCost()
    {
    }
}

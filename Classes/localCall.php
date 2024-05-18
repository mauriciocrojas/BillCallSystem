<?php


class LocalCall extends Call
{
    protected function CalculateCost()
    {
        $currentTime = date("H");
        $currentDay = date("N");

        switch ($currentDay) {
            case 6:
            case 7:
                $this->cost = $this->duration * 0.10;
            default:
                if ($currentTime >= 8 && $currentTime < 20) {
                    $this->cost = $this->duration * 0.20;
                } else {
                    $this->cost = $this->duration * 0.10;
                }
        }
    }
}

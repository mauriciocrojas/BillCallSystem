<?php

require_once "call.php";

class Bill
{
    private static $monthlySubscription = 10;
    private $calls = array();

    public function AddCall(Call $call)
    {
        array_push($this->calls, $call);
    }

    public function GenerateBill()
    {
        $localCalls = 0;
        $nationalCalls = 0;
        $internationalCalls = 0;

        foreach ($this->calls as $call) {
            if ($call instanceof LocalCall){
                $localCalls+=$call->getCosto();
            }
            else if($call instanceof NationalCall){
                $nationalCalls+=$call->getCosto();
            }
            else{
                $internationalCalls+=$call->getCosto();
            }
        }

        $totalBill = self::$monthlySubscription + $localCalls + $nationalCalls + $internationalCalls;

        echo "-----------------------------------<br>" .
            "Bill Detail:<br>" .
            "-Monthly Subscription: [$" . self::$monthlySubscription . "]<br>" .
            "-Local Calls Cost: [$" . $localCalls . "]<br>" .
            "-National Calls Cost: [$" . $nationalCalls . "]<br>" .
            "-International Calls Cost: [$" . $internationalCalls . "]<br><br>" .
            "Total Bill: [$" . $totalBill . "]<br>" .
            "-----------------------------------<br>";
    }
}

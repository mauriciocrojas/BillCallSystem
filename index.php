<?php

require_once "./Classes/call.php";
require_once "./Classes/bill.php";

$bill = new Bill(); 

$localCall = new LocalCall(10); 
$nationalCall = new NationalCall(5,"Banfield");
$internationalCall = new InternationalCall(2, "Estados Unidos");

$bill->AddCall($localCall);
$bill->AddCall($nationalCall);
$bill->AddCall($internationalCall);

$bill->GenerateBill();
<?php
 //Create variables to hold the amount of each foreign currency we’ll be exchanging: 
$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;
//Use echo to print how much of each currency we started out with.
echo "At the start of your transaction you had $riel riel, $kyat kyat, $krone krones, and $lek lek.";
//Look up the exchange rate for each of those currencies. Save a variable for each exchange rate
$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krone_to_usd = 0.11;
$lek_to_usd= 0.0090;
//.For each currency, calculate the amount of USD it will be exchanged for and use echo to print this to the terminal.
$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krone = $krone * $krone_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";
echo "\nYour $kyat kyat were exchanged for $usd_from_kyat usd.";
echo "\nYour $krone krone were exchanged for $usd_from_krone usd.";
echo "\nYour $lek riel were exchanged for $usd_from_lek usd.";
//The currency exchange business takes a flat $1 fee per conversion. Calculate our final amount of USD and use echo to print it to the terminal.
$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krone + $usd_from_lek - 4;
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";

$dollars_only = $final_amount % 1000000000;
 echo "\n Remaining $dollars_only dollar";
$change = $final_amount - $dollars_only;
echo "\n Difference $change ";
$rounded_change = $change * 100;
$rounded_change %= 100;
$rounded_change /= 100;
$final_amount = $dollars_only + $rounded_change;
echo "\n final amount is: $final_amount";

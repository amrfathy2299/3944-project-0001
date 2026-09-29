<?php
function calculate ($num)
{
    $price = $num;
    $vat = $price * 0.14;
    $serv = $price * 0.12;
    $total = $price + $vat + $serv;
    $msg = "Your VAT is $vat<br> 
    Your service is $serv <br> 
    Your total is $total";
    echo "$msg<br>";
}
calculate(1000);

function calculateInvoice($price1, $price2, $price3)
{
    $totalprice = $price1 + $price2 + $price3;

    $vat = $totalprice * 0.14;
    $serv = $totalprice * 0.12;
    $total = $totalprice + $vat + $serv;

    $msg = "Your total price is $totalprice<br>
            Your VAT is $vat<br>
            Your service is $serv<br>
            Your grand total is $total";

    echo "$msg<br>";
}
calculateInvoice(1000,2000,3000);

function greet(string $Fname, string $Lname)
{
    $msg = "Hello, $Fname $Lname ";
    echo "$msg<br>";
}
greet("Amr","Fathy");
<?php
$name = 'Amr Fathy';
$gender = 'male';
$job = 'not working';

$msg = "My name is $name, I am a $gender and i am currently $job";
echo $msg;

function calculate ($num)
{
    $price = $num;
    $vat = $price * 0.14;
    $total = $price + $vat;
    $msg = "your total is $total";
    echo "$msg<br>";
}
calculate (1000);
calculate (100);
calculate (1600);
<?php
declare(strict_types=1);
const TAX_RATE = .10;
$companyName = "Name";

function displayCompanyName(): void {
    global $companyName;
    $msg =  "$companyName <br>";
    echo $msg;
}


function calculateBonus($salary): float {
    $bonus = $salary * .25;
    return $bonus;
}
$bonus = calculateBonus(10000);
echo "Bonus is $bonus <br>";



function calculateFinalSalary(int|float $salary,int|float $bonus) : float {
    $tax = TAX_RATE * $salary;
    $final_salary= $salary + $bonus - $tax;
    return $final_salary;
}
echo "Your salary is " . calculateFinalSalary(10000, 2000);


function displaySalary(string|int $salary): void {
    echo $salary;
}












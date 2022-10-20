<?php
declare(strict_types=1);
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Operations.php';

// function without arguments
function sum1() 
{
    return 5 + 4;
}

// function with arguments
function sum2($arg1, $arg2)
{
    return $arg1 + $arg2;
}

echo sum1();

echo '<br/>';

echo sum2(1, 3);

echo '<br/>';

// $operations = new Operations();

// echo $operations->sum(2.5, 3);

echo Operations::sum(2, 3);

echo '<br/>';

$numbers = [1, 3, 5, 7, 9];

var_dump($numbers);

function mapNumbers($number)
{
    return $number + 1;
}

// $mappedNumbers = array_map('mapNumbers', $numbers);

$mappedNumbers = array_map(function ($number) { return $number + 1; }, $numbers);

echo '<br/><pre>';

print_r($mappedNumbers);


$mappedNumbers = [];

foreach ($numbers as $number) {
    $mappedNumbers[] = $number + 1;
}
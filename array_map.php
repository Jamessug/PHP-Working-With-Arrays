<?php 

require 'helpers.php';

// array_map(callable $callback , array $array1 [, array $... ]): array
// applies the callback function to each element of one or more arrays

$array = [1, 2, 3, 4, 5, 6];

// Use array_map to multiply each element of the array by 3
$array = array_map(fn($number) => $number * 3, $array);

prettyPrintArray($array);

echo '</ br>';

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];

// Use array_map to multiply corresponding elements from two arrays
// The callback function takes two parameters ($number1 and $number2) and returns their product

$array3 = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($array3);
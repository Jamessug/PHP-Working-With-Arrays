<?php

require 'helpers.php';

// array_filter( array $array [, callable $callback [, int $flag = 0 ]]): array
// It filters elements of an array using a callback function

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Use array_filter to filter out only the even numbers
// The callback function (defined as a lambda using fn) checks if a number is even
// ARRAY_FILTER_USE_BOTH is used as the flag, but in this case, it is not strictly necessary as the callback only uses the value
$even = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

// Reindex the filtered array so its 0-4 rather than 1,3,5,7,9  
$even = array_values($even);

prettyPrintArray($even);

// You have an array of numbers and want to filter out only those numbers that are greater than 10

$numbers = [5, 12, 3, 19, 8, 25];

$greaterThanTen = array_filter($numbers, fn($callback) => $callback > 10);

$greaterThanTen = array_values($greaterThanTen);

prettyPrintArray($greaterThanTen); 
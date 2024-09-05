<?php 

require 'helpers.php';

// array_keys(array $array , mixed $search_value [, bool $strict ]): array
// returns the keys from the array that match a specific value

$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

// Use array_keys to find the keys where the value is 10
$keys = array_keys($array, 10);

prettyPrintArray($keys);
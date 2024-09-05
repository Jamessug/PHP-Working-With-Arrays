<?php 

require 'helpers.php';

// array_diff(array $array1 , array $array2 [, array $... ]): array
// Compares $array1 against other arrays and returns values in $array1 that are not present in $array2 or $array3

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

// Print values from $array1 that do not appear in either $array2 or $array3
prettyPrintArray(array_diff($array1, $array2, $array3));

// array_diff_assoc: Compares arrays with both values and keys   
prettyPrintArray(array_diff_assoc($array1, $array2, $array3));
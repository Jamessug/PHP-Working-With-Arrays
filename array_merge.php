<?php 

require 'helpers.php';

// array_merge(array $array1 [, array $... ]): array
// merges the elements of one or more arrays into a single array

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];

// The elements from all arrays are combined into a single array
// Numeric keys will be re-indexed to ensure they remain sequential in the merged array
$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);
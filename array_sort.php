<?php 

require 'helpers.php';

// asort( array $array [, int $sort_flags = SORT_REGULAR ]): bool
// asort() sorts the array by values while maintaining the key-value associations (preserves keys)

$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array);

asort($array);

prettyPrintArray($array);

// ksort: Sorts the array by keys (alphabetical order in this case)
ksort($array);

prettyPrintArray($array);

// usort: Custom sorting of the array values without preserving keys
usort($array, fn($a, $b) => $a <=> $b);

prettyPrintArray($array);
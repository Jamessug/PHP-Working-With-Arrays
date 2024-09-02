<?php 

require 'helpers.php';

// array_chunk(array $array , int $size [, bool $preserve_keys ]): array

// Use array_chunk to split the array into chunks of size 2
// The third parameter (true) is to preserve the original array keys
// This will return an array of arrays, each containing 2 elements from the original array

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));

// You have a list of 12 students that you need to divide into groups of 4 for a class project
// You want to process each group separately

$students = ["Alice", "Bob", "Charlie", "David", "Eva", "Frank", "Grace", "Hank", "Ivy", "Jack", "Karen", "Leo"];

prettyPrintArray(array_chunk($students, 4, true));
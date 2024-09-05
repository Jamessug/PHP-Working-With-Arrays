<?php 

require 'helpers.php';

// array_search(mixed $needle , array $haystack [, bool $strict ]): mixed
// Searches the array for the specified value ('a') and returns the first matching key

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd']; 

// Search the array for the first occurrence of the letter 'a' and store its key (index) in $key
$key = array_search('a', $array);

// Check if the letter 'a' exists in the array using in_array
// If 'a' is found, it outputs 'Letter found'
if (in_array('a', $array)) {
    echo 'Letter found';
}
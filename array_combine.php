<?php 

require 'helpers.php';

// array_combine(array $keys, array $values): array

$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));

// You have two arrays: one with product names and another with their prices
// You need to create an associative array where the product names are keys and the prices are values

$productNames = ["Laptop", "Smartphone", "Tablet"];
$productPrices = [1000, 500, 300];

prettyPrintArray(array_combine($productNames, $productPrices));
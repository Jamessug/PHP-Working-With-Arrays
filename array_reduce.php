<?php 

require 'helpers.php';

// array_reduce(array $array , callable $callback [, mixed $initial ]): mixed
// reduces the array to a single value by iterating through each item and applying the callback function

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
    
];

// The callback function takes the accumulated sum and the current item, multiplies price and quantity, and adds to the sum
// Starts the total at 500, which may be used for testing, or can be adjusted based on requirements
$total = array_reduce(
    $invoiceItems, 
    fn($sum, $item) => $sum + $item['qty'] * $item['price'],
    500
);

echo $total;
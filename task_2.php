<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

function removeEvenNumbers($numbers) {
    $filteredNumbers = array_filter($numbers, function($number) {
        return $number % 2 !== 0;
    });

    
    print_r($filteredNumbers);
}

removeEvenNumbers($numbers);

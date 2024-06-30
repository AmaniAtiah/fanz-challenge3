
<?php


/*
 Definition of a function called findMaxAndMin that takes an array of integers as a parameter and returns an associative array containing the maximum and minimum numbers in the array.
*/

 function findMaxAndMin($arr) {
    // Initializing the maximum and minimum numbers to the first number in the array.
    $max = $arr[0]; 
    $min = $arr[0];

    // Looping through each number in the array.
    foreach($arr as $number) {
        // Checking if the current number is greater than the current maximum and updating the maximum if necessary.
        if($number > $max) {
            $max = $number;
        }
        // Checking if the current number is less than the current minimum and updating the minimum if necessary.
        if($number < $min) {
            $min = $number;
        }
    }

    // Returning an associative array containing the maximum and minimum numbers in the array.
    return array('Max' => $max, 'Min' => $min);


 }

?>
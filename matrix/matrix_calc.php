<?php

// Define the matrix grids
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

// Function to add two matrices
function addMatrix($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

// Function to subtract two matrices
function subtractMatrix($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $result[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
        }
    }
    return $result;
}

// Function to multiply two matrices
function multiplyMatrix($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix2[0]); $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < count($matrix2); $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}

// Example usage:
$result = addMatrix($matrix1, $matrix2);
print_r($result);

$result = subtractMatrix($matrix1, $matrix2);
print_r($result);

$result = multiplyMatrix($matrix1, $matrix2);
print_r($result);

?>

<?php

// Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.

$array = [ rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];

$largest = max($array);
echo $largest;
<?php

// Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".


for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 === 0 && $i % 5 === 0) {

        echo "Full-Stack <br>";

    } elseif ($i % 3 === 0) {

        echo "Back-End <br>";        

    } elseif ($i % 5 === 0) {

        echo "Front-End <br>";

    } else 

        echo $i . "<br>";

}

<?php

    // Write a PHP program to find the largest of three numbers using ternary Operator. 
    $a = 10;
    $b = 20;
    $c = 30;
    $max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
    echo "The largest number among $a, $b and $c is: $max";
?>

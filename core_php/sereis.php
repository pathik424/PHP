<?php


//Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,  o 34   

    $num = 10;
    $n1 = 0;
    $n2 = 1;
    echo "Fibonacci series for first $num numbers: \n";
    echo "$n1 $n2 ";
    while ($num > 2) {
        $n3 = $n1 + $n2;
        echo "$n3 ";
        $n1 = $n2;
        $n2 = $n3;
        $num--;
    }
?>

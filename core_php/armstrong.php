

<?php
    // Write a program to find whether a number is Armstrong or not   Write a program to print the below format :   59   2610   3711   4812  

    $num = 59;
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $rem = $temp % 10;
        $sum += pow($rem, 3);
        $temp = (int)($temp / 10);
    }
    if ($num == $sum) {
        echo "$num is an Armstrong number.";
    } else {
        echo "$num is not an Armstrong number.";
    }
?>





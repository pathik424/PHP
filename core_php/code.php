<?php

// What will be the values of $a and $b after the code below is executed? Explain your answer.   $a = '1';   $b = &$a;   $b = "2$b";

/* Ans : The code snippet you provided initializes the variable $a to the string '1'. 
The variable $b is then assigned a reference to $a. 
This means that $b and $a are now pointing to the same memory location. 
Finally, $b is assigned the value "2$b". 
Since $b is a reference to $a, this also changes the value of $a. 
Therefore, after executing this code, the values of $a and $b will both be "21".*/

?>
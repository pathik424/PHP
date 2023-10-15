<?php

// How can you tell if a number is even or odd without using any Condition or loop? 

/* ANS:

Using the bitwise AND operator: If we perform a bitwise AND operation between the number and 1, the result will be 0 if the number is even and 1 if it is odd. For example, n & 1 will be 0 if n is even and 1 if n is odd.

Using the modulo operator: If we take the modulo of the number with 2, the result will be 0 if the number is even and 1 if it is odd. For example, n % 2 will be 0 if n is even and 1 if n is odd.

Using bit shifting: If we shift the bits of the number one place to the right, the result will be half of the original number. If the original number was even, then the last bit would have been a 0, so after shifting, it will still be a 0. If the original number was odd, then the last bit would have been a 1, so after shifting, it will become a 0. We can then compare this shifted value with half of the original number to determine whether it was even or odd.*/

?>
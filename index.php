<?php

// function factorial($number, $type = 'ODD'){ 
//     if($number <= 1){   
//         return 1;   
//     }   
//     else{   
//         return $type == 'ODD' 
//             ? $number * factorial($number - 2, $type)
//             : $number * factorial($number - 1, $type);   
//     }   
// } 

// $number = 5; 
// $fact = factorial($number,'EVEN'); 
// echo "Factorial = $fact"; 

$number = 5;
$type = 'ODD';
$factorial = 1;
do {
  $factorial *= $number;
  $number = $type == 'ODD'
    ? $number - 2
    : $number - 1;
} while ($number > 0);
echo "Factorial = $factorial";

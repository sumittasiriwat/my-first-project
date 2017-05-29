<?php

$my_number = 2;

if ($my_number > 2 ) {
    echo "{$my_number} is greater than 2", PHP_EOL;
} else if ($my_number == 2) {
    echo "{$my_number} is equal to 2", PHP_EOL;
} else  {
    echo "{$my_number} is less than 2", PHP_EOL;
}

// switch

$my_number = 10;
switch($my_number) {
    case 2:
        echo "number is 2", PHP_EOL;
        break;
    case 10:
        echo "number is 10", PHP_EOL;
        break;
    default:
        echo "number is not 10", PHP_EOL;
        break; 
}        
    
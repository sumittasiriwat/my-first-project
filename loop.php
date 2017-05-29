<?php

// for ($i = 0; $i < 10; $i++) {
//     echo $i, PHP_EOL;
// }

// // while
// $i = 0;
// while ($i < 10) {
//     echo $i, PHP_EOL;
//     $i++;
// }

// // do while
// $i = 0;
// do {
//     echo $i, PHP_EOL;
//     $i++;
// } while($i < 10);

$people = ['Sumitta','AEM','Siriwat'];
foreach ($people as $person) {
    echo "Hello,{$person}", PHP_EOL;
}

for ($i = 0; $i < count($people); $i++) {
    echo "Hello, {$people[$i]}", PHP_EOL;
}
<?php

$a = 10;
$b = 2;
echo $a + $b, PHP_EOL;

echo add(10, 2), PHP_EOL;
echo subtractat(10,2), PHP_EOL;
echo capitalize('Sumitta','Aem'), PHP_EOL;
function capitalize($first_name, $last_name) {
    $capital_first_name = ucfirst($first_name);
    $capital_last_name = ucfirst($last_name);
    return "{$capital_first_name} {$capital_last_name}";
}    
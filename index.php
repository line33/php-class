<?php

/*
const EMMA_NAME = 1;
const DATABASE_CONFIG = 'database';
$chris = 'Just Chris';
$name = 'chris';

echo 'Hello ' . ${$name} . PHP_EOL;
echo (int)'2' + 2 . PHP_EOL;

// Configuration
$_ENV = [
    'database' => [
        'host'      => 'localhost',
        'dbname'    => 'test',
        'user'      => 'root',
        'pass'      => 'root',
    ]
];

// Math Operators
$walletBalance = 5; 
$drinkCost = 2;

// buy drink and get the balance
$balance = $walletBalance - $drinkCost;
$reminder = $walletBalance % $drinkCost;

// print to the screen
echo 'Balance after purchase: ', $balance, '. Reminder: ', $reminder, PHP_EOL;

*/

// Array
$students = ['chris', 'emma', 'sammy', 'ennie'];

// echo(json_encode($students));
//echo $students[EMMA_NAME] . PHP_EOL;

// type casting
$numbers = (int)'20';

//var_dump($_ENV[DATABASE_CONFIG]);

// using for loop
$studentCount = count($students);

for ($index = 0; $index < $studentCount; $index++) 
{
    echo "Index: {$index}, Student Name: {$students[$index]}" . PHP_EOL;
}

echo $index;



?>
<?php 
// VARIABLE
/**
 * We have 3 scopes of variables, namely;
 * 1. local
 * 2. global
 * 3. static
 */

 // LOCAl Variable
 $name = 'chris';
 $age = 30;

 function printName()
 {
    // access the name local variable using 'global'
    global $name, $age;

    // print it out
    echo $name . PHP_EOL;

    // access the name local variable using '$GLOBALS'
    echo $GLOBALS['name'] . PHP_EOL;

    // age, local
    //$age = 18;

    // return an array
    return ['age' => $age];
 }

 // extract the variable
 $getData = printName();

 // extract key values as variables
 //extract($getData); // handle keys as variables.

 // get age by variable, and age by value
 var_dump($age, $getData['age']);

// GLOBAL Variables
var_dump(
    $_ENV, // manipulate environment variables
    $_COOKIE, // manipulate browser cookie
    $_FILES, // get files submitted through the POST request method
    //$_GET, // manipute HTTP 
    $_POST,
    //$_REQUEST,
    $_SERVER,
    // $_SESSION 
);


// working with $_GET
echo filter_var($_GET['search'], FILTER_SANITIZE_STRING);
echo $_GET['name'];

// working with files
?>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="music">
        <input type="file" id="music" accept=".mp3,.mp4,.wav" name="music"/>
    </label>
    <input name="user" placeholder="Enter your name"/>
    <button type="submit">Upload</button>
</form>


<?php

// static variables
function increment()
{
    static $y = 1;

    // echo $y
    echo $y++, PHP_EOL;
}

$number = 0;

$incrementFunc = function() use (&$number)
{
    echo $number, PHP_EOL;
    $number++;
};


for($x = 0; $x <= 10; $x++) $incrementFunc();
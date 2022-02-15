<?php


// In strict mode, only a variable of the requested type (like: int of the type declaration) will be accepted, or a TypeError will be thrown.
declare(strict_types=1);

// phpinfo();


$newLine = "<br/><hr/><br/><br/>";

echo "Exercise 1 starts here:";
$x = 1;  //assign a variable
function newExercise($x)  // first I changed to camel case casing and add the variable
{
    $block = "<br/><hr/><br/><br/>Exercise $x  starts here:<br/>";
    echo $block;
    
};

newExercise($x); // calling the function


// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // Just need to change 1 by 0 as it is the first element of an array ... too ... simple ? 
echo $newline;
echo "$newline exercise 2 : <br/>";
echo $monday;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
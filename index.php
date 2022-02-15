<?php


// In strict mode, only a variable of the requested type (like: int of the type declaration) will be accepted, or a TypeError will be thrown.
declare(strict_types=1);




// phpinfo();




// echo "Exercise 1 starts here:";
$x = 1;  //assign a variable
function newExercise($x)  // first I changed to camel case casing and add the variable
{
    $block = "<br/><hr/><br/><br/>Exercise $x  starts here:<br/>";
    echo $block;
    
};

newExercise(1); // calling the function

newExercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // Just need to change 1 by 0 as it is the first element of an array ... too ... simple ? 


echo $monday;

newExercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = 'Debugged ! Also very fun'; // changed to simple quoted
echo substr($str, 0, 10);

newExercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)

foreach($week as &$day) // added the & sign for the BONUS ! 
{
    $day = substr($day, 0, -3);
}

print_r($week);

newExercise(5);






// === Exercise 5 ===
// The result should be: "Copyright © <current year> - BeCode"
function copyright( $year)
{
    print "Copyright &copy; $year BeCode";  //change return to print and added the word Copyright ( &copy = the icon 'Y' = the current year )
}
//print the copyright
copyright(date('Y'));


newExercise(6);
// === Exercise 6 ===
// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array

$arr = [];
for ($i = 0; $i<1; $i++) {
    array_push($arr, range('A', 'Z'), $letter);  // not sure about this one as it's not really a for loop anymore ? 
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array





ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
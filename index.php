<?php

// In strict mode, only a variable of the requested type (like: int of the type declaration) will be accepted, or a TypeError will be thrown.
declare(strict_types=1);

echo "Exercise 1 starts here:";
$x = 1;  //assign a variable
function newExercise($x)  // first I changed to camel case casing and add the variable
{
    $block = "<br/><hr/><br/><br/>Exercise $x  starts here:<br/>";
    echo $block;
    
};

newExercise($x); // calling the function




<?php
//PHP Conditional statements
//if 2)if....else  3)if...else if.....else 4)switch

$gender= "female";
if($gender == "female")
    echo "Happy womens day";
echo "<br>";

if ($gender=="female")
{
    echo "Happy Womens Day";
}
else{
    echo "Happy Mens Day";
}
echo "<br>";

$t = date("H");
echo $t;
echo "<br>";

if ($t <"12")
{
    echo "Good Morning";
}
else if ($t >"12")
{
    echo "Good Afternoon ";
}
else
{
    echo "Its Noon";
}

echo "<br>";

//Switch statement
//Used to perform different actions based on different conditions.
//Syntax
//switch (n)
/*{
        case Label1:
            code to execute;
         break;

        default:
            code to execute if none of conditions are met
}
echo "What gender are you?";
switch($gender)
{
    case 'Male':
        echo "I am Male";
        break;
    case 'Female':
        echo "I am Female";
        break;
        case 'Other':
            echo "I am Big foot";
            break;
    default:
        echo "None of the above";
}*/

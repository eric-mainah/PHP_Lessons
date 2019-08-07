<?php
/*A function is a block of code that performs a specific task and can be used repeatedly in a program
A function will not execute immediately a page loads
A function is executed once it is called .
Syntax   function FunctionName(Parameters){ code to be executed;  }
A parameter is inside the function declaration
An Argument is inside the function call*/
function SayHi()
{
    echo "Hello world";
}
function gap()
{
    echo "<br>";
}
SayHi();gap();
SayHi();gap();
SayHi();gap();
function greet($name , $age)
{
    echo "Hello my name is $name I am $age old";
}
greet("Eric" ,"20");gap();
greet("Antony", "28");gap();
greet("Myself", "122");gap();
$myName="Eric";     $myAge=20;
greet($myName,$myAge);gap();

function square($d)
{
    echo $d*$d;
}
square(2);gap();
for ($d=1;$d<=10;$d++)
{
    square($d);
    gap();
}
//Reverse a String Function
function reverse($nam)
{
    $leng=strlen("$nam");
        for ($i=($leng-1) ; $i >= 0 ; $i--)
        {
            echo $nam[$i];
        }
}
reverse("eric");gap();

function getMod($num,$num2)
{
    $result=$num%$num2;
    return $result;
}
$getRes=getMod(3,2);
echo $getRes;gap();

function church($pastor="Nganga")
{
    echo "My Pastor is  $pastor";
}

church("Maribie");
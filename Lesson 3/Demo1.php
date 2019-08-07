<?php
//PHP Operators

$x =100;
$y =50;

$z=$y+$x;
$q=$x-$y;
$w=$x*$y;
$r=$x/$y;

echo $z;
echo "<br>";
echo $q;
echo "<br>";
echo $w;
echo "<br>";
echo $r;
echo "<br>";

$s=1;
$s +=23;
$d=3;
    $d+=23;
    $d-=23;
    $d*=23;

    echo $s;
echo "<br>";
    echo $d;
echo "<br>";

//Php Comparison Operator
$t=10;
$r=10;

//equal ==
echo $t==$r;
echo "<br>";

//=== identical
//returns true if the two are identical and of the same datatype

$u=100;
$n=12.22;

var_dump($u===$n);
    echo "<br>";
var_dump($t!=$r);
echo "<br>";
var_dump($u>$t);
echo "<br>";

echo $s;
echo "<br>";
//number of characters in a string
echo strlen("hello world");
echo "<br>";
//Replace something in a string
echo str_replace("john","Kim","I am john");
echo "<br>";
//Reverse the characters in a string
echo strrev("I am John");
echo "<br>";
//shuffle characters in a string
echo str_shuffle("Keep off this property");
echo "<br>";

//Increament and decreament operator
//Use in conjuction with variables

$b=1;
$c=5;
echo ++$b;//pre-increment increments then returns the new value same for decrement
echo "<br>";
echo $c++;//post-increment returns the value then increments it by one same for decrement
echo "<br>";
//logical operators
//used to combine conditional statements
//1)and[&&] ie $x and $y returns true if  and only if both are true
//2)or[||] ie $x or $y return true if one of them them is true
//3)xor ie $x xor $y returns true if either is true but not all
//4)! ie !x returns true if $x  is not true

$x=100; $y=50;
if ($x==100 && $y==50){
    echo "Conditions have been met";}
echo "<br>";
if ($x==56 || $y==50){
    echo "one condition has been met";}
echo "<br>";
if ($x!=77){
    echo "Not True";}
echo "<br>";

//String operators
//concatenation
$name="PHP"; $name2="Developer";
echo $name . $name2;
echo "<br>";

//concatenation assignment
$firstname="Johnte";
$secondname="Mavelah";
echo $firstname .= $secondname;
echo "<br>";
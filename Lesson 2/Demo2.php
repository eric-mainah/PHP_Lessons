<?php
//constants are like variables but once declared cannot be changed.
//Constant names start with  underscore or letter.
//NB:No  $ before  the constant  They are global.
//To define a constant we will use a function define()
//Syntax
            //define(name,value,case-insensitive)

define("coordinates",90,true);
    echo coordinates;
    echo "<br>";
    echo Coordinates;
    echo"<br>";

    //arrays

$fruits=array(["bananas","Apples","peaches"]);
define("fruits",["bananas","Apples","Peaches"],true);

echo fruits[0];
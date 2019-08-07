<?php
//PHP Variables
$name = "Eric";
echo $name;

$text = "PHP Is awesome";
    echo $text;

    $num1 ="100";
    $num2= "230";

    echo  $num1 + $num2;

    echo "<header> 
<h1>Welcome</h1>
    </header>";

    //php is loosely typed

$float_num = 6.9933;//float is a number with a decimal place
$integer_number=556;//integer is a number with no decimal
$text="PHP Is awesome";//this is a a string
$isHappy = false; $isHappy= true;//Boolean

    //PHP Variable scope
    //Variables can be declared anywhere in PHP
    // The scope of a variable is the part of the script Where the variable can be used
    #Global Local Static

    $x= 5;//global variable to be used anywhere

    function MyText()
    {
      //  global $x;
        echo "Hello World";
        $sentence = "Welcome to PHP Class";
    }

    MyText();

    //PHP Data Types
    //Variables store different types of data types ie
    //1)String  2)Integer  3)Float   4)Boolean  5)Array  6)Object   7)Null   8)Resource


    //PHP Strings
    //String is  a sequence of Characters

    $name ="Developer";
    echo "<br>";
    echo $name;
    echo"<br>";
    var_dump ( $name);
    echo "<br>";
    echo strlen( $name);
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo str_replace("World" , "Kenya" ,"Hello World");
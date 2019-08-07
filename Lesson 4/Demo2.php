<?php
/*Loops
while loop for loop do while loop foreach loop
1)While loop First checks the condition first then executes the code
syntax
        while(condition){  code to execute  }
*/

$x=0;

/*while($x<10)
{
    echo $x ."Hello world";
    $x++;
    echo "<br>";
}*/

//do while loop first executes the code then checks if it meets the condition

do{
    echo "Hello world ";
    echo "<br>";
    $x++;
}while($x<10);

//For(Initialize:Condition:increment/decrement){ code to be executed }

for ($y=0;$y<10;$y++)
{
    echo "hello world";
    echo "<br>";
}

/*Foreach works only on arrays and is used to to loop through each key/value pair in an array
syntax
foreach($array as $value)
code to execute*/

$languages = array("HTML","CSS","Bootstrap","PHP");
foreach ($languages as $language)
{
    echo $language;
    echo "<br>";
}

$n=1;
while ($n<=100)
{
    if($n%2==0 && $n%3==0 )
    {
        echo "Number is divisible by both 2 and 3";
        echo "<br>";
    }
    else if ($n%2==0  )
    {
        echo "Number is divisible by 2 ";
        echo "<br>";
    }
    else if($n%3==0)
    {
        echo "Number divisible by 3";
        echo "<br>";
    }
    else
    {
        echo $n;
        echo "<br>";
    }
    $n++;
}




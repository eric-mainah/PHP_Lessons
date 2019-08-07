<?php

for($a=1;$a<=100;$a++)
{
    if($a%3==0)
    {
        echo "Fizz ";
        echo "<br>";
    }
    else if($a%5==0)
    {
        echo "Buzz ";
        echo "<br>";
    }
    else if ($a%3==0 && $a%5==0)
    {
        echo "FizzBuzz ";
        echo "<br>";
    }
    else
    {
        echo $a;
        echo "<br>";
    }
}

for($row=1;$row<5;$row++)
{
    for($x=5;$x>=1;$x--)
    {
        echo $x;
        echo "\n";
    }
    echo "<br>";
}

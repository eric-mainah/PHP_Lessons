<?php
function getCars()
{
    $car=array("Ford","Toyota","Isuzu");
    $num_cars=count($car);
    for ($x=0;$x<$num_cars;$x++)
    {
        echo $car[$x] ."<br>";
    }
}
getCars();

/*function getFed($country, $food)
{
    echo $country." =>".$food ."<br>";
}

getFed("Kenya" , "Sembe");
getFed("Uganda" , "Matoke");
getFed("Tanzania" , "Wali");*/

function getFed($food)
{
    foreach ($food as $place => $dish)
        echo $place ." => ".$dish ."<br>";
}

getFed("Matoke");




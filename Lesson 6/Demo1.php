<?php
/*PHP ARRAYS
$variableName = array("item1" , "item2")
NB:Items can be strings integers etc*/
function gap()
{
    echo "<br>";
}
$cars = array("Benz" , "Toyota" , "Rolls" ,  "Ford");
echo $cars[2];echo "<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
$num_cars=count($cars);
for ($x=0;$x<$num_cars;$x++)
{
    echo $x ."." . $cars[$x];
    gap();
}

//Associative array uses keys to access values

$food= array("Uganda"=>"Matoke" , "Kenya"=>"Sembe" , "Tanzania"=>"Wali");

echo "I love " .$food["Uganda"].",".$food["Kenya"]." and ".$food["Tanzania"];
gap();

foreach ($food as $country=>$dish)
echo $country. " ". $dish;
gap();

$electronic = array();
$electronic['Phone']='Huawei';
$electronic['Laptop']= 'Dell';
$electronic['TV']= 'Samsung';

foreach ($electronic as $electro=>$brand)
    echo $electro." ".$brand ;gap();

    //Assignment create two functions
// one takes in an index array
// the second takes in an associative array as an argument
// echoing out each item


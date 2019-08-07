<?php
/*PHP sorting arrays
Elements in an array can be sorted alphabetically Numerically ascending or descending order*/
//sort()
$cars=array("Ford","Audi","Chevy");
$num=array(32,4,5,3,322,34,4,5,4,33.2,2,2.3,43);
sort($cars);
sort($num);
for ($x=0;$x<count($num);$x++)
{
    echo $x." ".$num[$x]."<br>";
}

//rsort()
$cars=array("Ford","Audi","Chevy");
rsort($cars);
for ($x=0;$x<count($cars);$x++)
{
    echo $x." ".$cars[$x]."<br>";
}
//asort() applies only on associative array using the value in ascending order
$food= array("Uganda"=>"Matoke" , "Kenya"=>"Sembe" , "Tanzania"=>"Wali");

asort($food);
foreach($food as $country=>$dish)
    echo "$country : $dish" ."<br>";

//ksort()  used in associative array using the key in ascending order
ksort($food);
foreach($food as $country=>$dish)
    echo "$country : $dish" ." <br>";



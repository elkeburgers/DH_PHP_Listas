<?php

//exercicio 01

$a=['a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'];
foreach($a as $letra=>$dado){
    echo $letra."=>".$dado." ";
}
echo "<br>"."<br>";

$a=json_encode($a);
echo $a;
echo "<br>"."<br>";

// $b=json_decode($a);
$b=json_decode($a, true);
foreach($b as $letra=>$dado){
    echo $letra."=>".$dado." ";
}
echo "<br>"."<br>";

echo $b["c"]." | ".$b["a"]." | ".$b["b"];
echo "<br>"."<br>";




?>
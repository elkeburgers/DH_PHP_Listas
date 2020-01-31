<?php

// exercício 01

for ($i = 0; $i <= 100; $i++){
    echo $i." ";
}
echo"<br>"."<br>";

// exercício 02
$pare = mt_rand(0,100);
echo $pare;
echo "<br>";
for ($i = 0; $i <= $pare; $i++){
    echo $i." ";
}
echo"<br>"."<br>";

// exercício 03
for ($i=0; $i<=10; $i++){
    echo $i*2;
    echo "<br>";
}
echo"<br>";

// exercicio 04
$qtdeCara = 0;
$qtdeLancamento = 0;
while ($qtdeCara < 5){
    $moeda = mt_rand(0,1);
    $qtdeLancamento++;
    if($moeda == 1){
        $qtdeCara++;
        echo "Cara"." ";
    } else {
        echo "Coroa"." ";
    }
}
echo"<br>";
echo "Foram necessários ".$qtdeLancamento." lançamentos!";
echo "<br>"."<br>";

// exercicio 05
do{
    $moeda = mt_rand(0,1);
    echo $moeda." ";
} while ($moeda !=1);
echo "<br>"."<br>";

// exercicio 06
$nomes = ["Martha", "Helmuth", "Lorena", "Cesar", "Elke"];
for ($i = 0; $i<5; $i++){
    echo $nomes[$i]." ";
}
echo "<br>";

$nomes = ["Martha", "Helmuth", "Lorena", "Cesar", "Elke"];
foreach($nomes as $nome){
    echo $nome." ";
};
echo "<br>";

$nomes = ["Martha", "Helmuth", "Lorena", "Cesar", "Elke"];
$a = 0;
while ($a<count($nomes)){
    echo $nomes[$a]." ";
    $a++;
}
echo "<br>";

$nomes = ["Martha", "Helmuth", "Lorena", "Cesar", "Elke"];
$i = 0;
do{
    echo $nomes[$i]." ";
    $i++;
} while ($i <count($nomes));
echo "<br>"."<br>";



?>
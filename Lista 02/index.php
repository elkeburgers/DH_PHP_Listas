<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

// exercício 01
$vara = 5;
$varb = 12;
if ($vara > $varb){
    echo "O maior número é ".$vara;
}else{
    echo " O maior número é ".$varb;
}
echo"<br>";

// exercício 02
$aleatorio = mt_rand(1, 5);
echo $aleatorio;
echo"<br>";
if ($aleatorio == 3){
    echo $aleatorio;
} if($aleatorio ==5){
    echo $aleatorio;
}
echo"<br>";

// exercicio 03
if ($aleatorio != 3){
    echo "O número NÃO é 3.";
}else{
    echo $aleatorio;
}
echo"<br>";

// exercício 04
$meiaidade = mt_rand(1,100);
if ($meiaidade > 50){
    echo "O  número é maior do que 50.";
}else{
    echo "O número é menor do que 50.";
}
echo"<br>";
echo $meiaidade;
echo"<br>";

// exercício 05
if ($meiaidade >50 && ($meiaidade %2==0)){
    echo "O número cumpre a condição.";
}else{
    echo  "O número NÃO cumpre  a condição.";
}
echo"<br>"."<br>";

// exercício 06
$idade=44;
$casado=true;
$sexo="Feminino";
if ($idade>=18 && $casado=false){
    echo "Boas-vidas!";
}else{
    if($sexo="outro"){
        echo "Boas-vindas";
    }
}
echo"<br>"."<br>";

// exercício 07
$quantidadeDeAlunos = 100;
if ($quantidadeDeAlunos){
    echo "true";
}else{
    echo  "false";
}
echo"<br>";

$i = $quantidadeDeAlunos;
if($i==1){
    echo "true";
}else{
    echo "false";
}
echo"<br>";

// exercício 08
$numero = 21;
echo $numero % 2 == 0 ? "O número é par":"O número é impar.";
echo"<br>";

// exercício 09 e 10
$i = mt_rand(1,5);
echo $i;
echo"<br>";
switch($i){
    case 1:
    echo "i é igual a 1";
    break;
    case 2:
    echo "i é igual a 2";
    break;
    default:
    echo "NÃO é igual a 1 ou 2";
    break;
}
echo"<br>";

// exercício 11
$x = mt_rand(1,100);
echo $x;
echo"<br>";
$y = mt_rand(1,100);
echo $y;
echo"<br>";
if ($x > $y){
    echo $x;
}else if($y > $x){
    echo $y;
}else{
    echo "São iguais.";
}
echo"<br>";


?>
</body>
</html>
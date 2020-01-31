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

?>
</body>
</html>
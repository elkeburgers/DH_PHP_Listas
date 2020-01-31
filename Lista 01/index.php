<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

// exercicio 01
// duvida no item g e h
    $num = 2;
    echo $num;
    echo"<br>";
    var_dump ($num);
    echo"<br>";

    $dec = 2.5;
    echo $dec;
    echo"<br>";
    var_dump ($dec);
    echo"<br>";

    $simples = 'E';
    echo $simples;
    echo"<br>";
    var_dump ($simples);
    echo"<br>";

    $dupla = "L";
    echo $dupla;
    echo"<br>";
    var_dump ($dupla);
    echo"<br>";

    $simplesdois = 'Elke';
    echo $simplesdois;
    echo"<br>";
    var_dump ($simplesdois);
    echo"<br>";

    $dupladois = "Lorena";
    echo $dupladois;
    echo"<br>";
    var_dump ($dupladois);
    echo"<br>";

    $num = "string";
    echo $num;
    echo"<br>";
    var_dump($num);
    echo"<br>";

    $simplesdois = 2.6;
    echo $simplesdois;
    echo"<br>";
    var_dump($simplesdois);
    echo"<br>";

    $num ="3.5";
    echo $num;
    echo"<br>";
    var_dump($num);
    echo"<br>";

    //exercício 02
    $um = "Três";
    $dois = "pratos";
    $tres = "de";
    $quatro = "trigo";
    $cinco = "para";
    $seis = "tres";
    $sete = "tigres";
    $oito = "tristes";
    echo $um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$sete." ".$oito.".";
    echo"<br>";
    echo "Os ".$sete." ferozes também ficam ".$oito.".";
    echo"<br>";

    
    //exercício 03
    // fazer testes
    $var01 = true;
    $var02 = false;
    $var03 = 0;
    $var04 = 1;
    $var05 = 6;
    $var06 = '';
    $var07 = "3";
    $var08 = "true";
    $var09 = 'false';
    $var10 = null;

    function tipoDado($varN){
        if ($varN == true){
            echo 'o valor '.$varN.' é verdadeiro.';
        }
        else{
            echo 'o valor '.$varN.'  é falso.';
        }
    }

    tipoDado($var01);
    echo"<br>";
    tipoDado($var02);
    echo"<br>";
    tipoDado($var03);
    echo"<br>";
    tipoDado($var04);
    echo"<br>";
    tipoDado($var05);
    echo"<br>";
    tipoDado($var06);
    echo"<br>";
    tipoDado($var07);
    echo"<br>";
    tipoDado($var08);
    echo"<br>";
    tipoDado($var09);
    echo"<br>";
    tipoDado($var10);
    echo"<br>";

    
</body>
</html>
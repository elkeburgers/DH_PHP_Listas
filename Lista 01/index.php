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

    //exercício 04
    echo"<br>";
    $animais = ["leao", "carneiro", "tigre", "vaca", "hiena"];
    var_dump ($animais);
    echo"<br>";
    $animais[5]="cachorro";
    $animais[6]="gato";
    var_dump($animais);
    echo"<br>";
    echo "Eu gosto de animais: ".$animais[0].", ".$animais[1].", ".$animais[2].", ".$animais[3].", ".$animais[4].", ".$animais[5].", e ".$animais[6].".";
    echo"<br>";
    $animais[0]="burro";
    echo $animais[0];
    echo"<br>";
    $animais[100]="gaivota";
    echo $animais[100];
    echo"<br>";
    $animais[16]="albatroz";
    echo $animais[16];
    echo"<br>"."<br>";

    
</body>
</html>
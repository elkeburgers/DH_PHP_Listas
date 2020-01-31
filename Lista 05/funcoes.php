<?php 

// exercício 1a

function maior($var1, $var2, $var3){
    if ($var1>$var2 && $var1>$var3){
        return "O maior número é " .$var1.".";
    }else{
        if ($var2>$var1 && $var2>$var3){
            return "O maior número é ".$var2.".";
        }else{
            return "O maior número é ".$var3.".";
        }
    }
}
echo maior(5, 8, 2);
echo "<br>"."<br>";

// exercicio 1b

function tabela($numInicial, $numMax){
    $num=[];
    $i=0;
    foreach (range($numInicial, $numMax) as $numeros){
        array_push($num, $numeros);
        echo $num[$i]."<br>";
        $i++;
    }
}
echo tabela(8, 13);
echo "<br>"."<br>";

// exercício 1d

// function maior($var1, $var2, $var3){
//     $numeroMagico = 13; 
//     function maior($var1, $var2, $var3 = ""){
//         global $numeroMagico;
//             if($var3=""){
//                 if ($var1>$var2 && $var1>$var3){
//                 return "O maior número é " .$var1.".";
//             }else{
//                 if ($var2>$var1 && $var2>$var3){
//                     return "O maior número é ".$var2.".";
//                 }else{
//                     return "O maior número é ".$var3.".";
//                 }
//             }
//             }else{
//             $var3 = $numeroMagico;
//                 if ($var1>$var2 && $var1>$var3){
//                 return "O maior número é " .$var1.".";
//                 }else{
//                     if ($var2>$var1 && $var2>$var3){
//                     return "O maior número é ".$var2.".";
//                     }else{
//                     return "O maior número é ".$var3.".";
//                 }
//             }
//         }
//     }
// }
// echo maior(5, 8, 22);
// echo "<br>"."<br>"


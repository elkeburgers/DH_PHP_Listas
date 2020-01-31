<?php

function triangulo ($base, $altura){
    $superficieT=(($base * $altura)/2);
    return $superficieT;
}
echo "A área da suerpfície do tirangulo é ".triangulo(3,6).".";
echo "<br>"."<br>";


function retangulo ($base, $altura){
    $superficieR=($base*$altura);
    return $superficieR;
}
echo "A área do retangulo é ".retangulo(8,2).".";
echo "<br>"."<br>";

function quadrado ($lado){
    $superficieQ=($lado*$lado);
    return $superficieQ;
}
echo "A área do quadrado é ".quadrado(8).".";
echo "<br>"."<br>";

?>

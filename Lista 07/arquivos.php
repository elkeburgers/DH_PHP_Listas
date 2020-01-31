<?php

// exercício 3 a)

$arquivo="texto.txt";
if (file_exists($arquivo)){
    $mundo=fopen($arquivo,"w+");
}else{
    $mundo=fopen($arquivo,"x+");
} 

// exercício 3 b) c)
for ($i=0; $i<50; $i++){
    fwrite($mundo, "Olá mundo, testando!".PHP_EOL);
}
echo file_get_contents ("texto.txt");
echo "<br>"."<br>";

// exercício 3 d)

$tamanho = filesize('texto.txt');
$conteudo = fread($mundo, $tamanho);
echo file_get_contents ("texto.txt");
echo "<br>"."<br>";

// exercício 3 f) g) h)

$arquivo2=fopen('texto2.txt', 'w');
echo file_get_contents ('texto2.txt');
echo "<br>"."<br>";
fwrite($arquivo2, 'Este texto sobrescreve o anterior?');
echo file_get_contents ('texto2.txt');
echo "<br>"."<br>";
fclose($arquivo2);

$arquivo3=fopen('texto2.txt', 'a');
fwrite($arquivo3, 'Não');
echo file_get_contents ('texto2.txt');
echo "<br>"."<br>";

?>
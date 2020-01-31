<?php

// exercício 01 a)

if(file_exists("./uploads/".$_FILES["imgPerfil"]["name"])){
    echo "Arquivo existente,favor carregar outro.";
}else{
$nome = $_FILES["imgPerfil"]["name"];
$nomeTemp = $_FILES["imgPerfil"]["tmp_name"];
$diretorio = dirname(__FILE__);
$nomePasta = "/uploads/";
$caminhoCompleto = $diretorio.$nomePasta.$nome;
move_uploaded_file($nomeTemp, $caminhoCompleto);
}
?>

<!-- exercício 01 b -->

<br><br>
<a download href='uploads/<?php echo $_FILES['imgPerfil']['name']?>'>Clique aqui para ver a sua foto</a>



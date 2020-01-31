<!-- exercício 01 a  -->

<!DOCTYPE html>
<html>

<body>
    <br>.<br>
    <form method="post" action="download.php" enctype="multipart/form-data">
        <label>Arquivo:</label>
        <input type="file" name="imgPerfil" />
        <br>.<br>
        <input type="submit" value="Carregar foto" />
    </form>
    <br>.<br>

    <!-- exercício 2 -->

    <form>
    <p> Formulário de cadastro</p>
        Nome:<br>
        <input type="text" name="nome"><br>
        <br>
        Telefone:<br>
        <input type="number" name="telefone"><br>
        <br>
        <form method="post" action="perfil.php" enctype="multipart/form-data">
            <label>Arquivo:</label>
            <input type="file" name="imgPerfil" />
            <br>.<br>
            <input type="submit" value="Carregar foto" />
        </form>
        <br>.<br>


        <?php


?>

</body>

</html>
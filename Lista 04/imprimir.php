<?php

// exercício 01
var_dump($_GET);
echo "<br>"."<br>";

?>

<!-- exercício 02 -->

<!DOCTYPE html>

<body>
    <form action="atividade4.php" method="get">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>

</html>
<?php
var_dump($_GET);
echo "<br>"."<br>";
?>

<?php
var_dump($_GET["email"]);
echo "<br>";

foreach($_GET as $dados=> $valor){
    echo "$dados : $valor"."<br>";
}
var_dump($_GET);
echo "<br>"."<br>";
?>

<!-- exercício 03 -->

<!DOCTYPE html>

<body>
    <form action="atividade4.php" method="post">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>

</html>
<?php
var_dump($_POST);
echo "<br>"."<br>";

foreach($_POST as $dados=> $valor){
    echo "$dados : $valor"."<br>";
}
var_dump($_POST);
echo "<br>"."<br>";
?>


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

<!-- exercício 04 -->

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="atividade4.php" method="post">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <p>Como você ficou sabendo deste site?</p>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="comoSoube">
            <label class="form-check-label" for="comoSoube">Indicação de amigos</label>
            <br>
            <input type="checkbox" class="form-check-input" id="comoSoube">
            <label class="form-check-label" for="comoSoube">Google</label>
            <br>
            <input type="checkbox" class="form-check-input" id="comoSoube">
            <label class="form-check-label" for="comoSoube">Outros</label>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gênero</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRAdios" id="masc" value="optionM"
                            checked>
                        <label class="form-check-label" for="masc">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRAdios" id="fem" value="optionF" checked>
                        <label class="form-check-label" for="fem">Feminino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRAdios" id="indef" value="optionI"
                            checked>
                        <label class="form-check-label" for="indef">Prefiro não informar</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div>
            <select class="custom-select">
                <option selected>Dormiu bem ontem a noite?</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <br>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="termos">
            <label class="custom-control-label" for="termos">Aceita <a href=url("/termos.html")>termos e condições</a>?</label>
        </div>
        <br>
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

// exercício 5 
foreach (getallheaders() as $nome=>$value){
    echo "$nome : $value <br>";
}
echo "<br>"."<br>";



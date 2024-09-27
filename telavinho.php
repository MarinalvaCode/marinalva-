

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>

</head>

<body>
    <h1>Cadastro de Vinho</h1>
    <form action="" method="post">
        <label for="nome">Nome do Vinho:</label></br>
        <input type="text" id="nome" name="nome" required></br></br>

        <label for="tipo">Tipo do Vinho:</label></br>
        <input type="text" id="tipo" name="tipo" required></br></br>

        <label for="preco">Preço:</label></br>
        <input type="number" id="preco" name="preco" required step="0.01"></br></br>

        <label for="safra">Safra:</label></br>
        <input type="date" id="safra" name="safra" required></br></br>

        <input type="submit" name="cadastrar" value="Cadastrar"></input>
        <p> <?php

            require_once 'Vinho.php';

            $aviso = "";

            if (isset($_POST['cadastrar'])) {

                $vinho = new VINHO();
                $nome = $vinho->setNome($_POST['nome']);
                $tipo = $vinho->setTipo($_POST['tipo']);
                $preco = $vinho->setPreco($_POST['preco']);
                $safra = $vinho->setSafra($_POST['safra']);

                echo "<h2>informações do vinho</h2>";
                echo $vinho->mostrarVinho();
                echo "<br>";

                if ($vinho->verificarpreco($_POST['preco']) == true) {
                    $aviso = "produto em oferta";
                } else {
                    $aviso = "produto com o preco normal";
                }
            }
            echo $aviso
            ?></p>
    </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "Olá $nome $sobrenome!> Seja bem vindo, como estás?";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior!</a></p>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $soma = $valor1 + $valor2;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
            <h2>Resultado: </h1>
            <p style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><?= "A soma entre $valor1 e $valor2 é <b>igual a $soma</b>" ?></p>
        </section>
</body>
</html>
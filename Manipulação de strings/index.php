<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Formatos de String</h1>
    <p>&deg; double quoted -> ""</p>
    <p>&deg; single quoted -> ' '</p>
    <p>&deg; Heredoc</p>
    <p>&deg; Nowdoc</p>

    <?php 
        // $nome = 'Matheus';
        // $sobrenome = 'Alves ';

        // echo "$nome " . "$sobrenome \u{1F596}"

        // const ESTADO = "PE";

        // echo "Moro no estado de ". ESTADO;

        $nome = "Matheus";
        $sobrenome = "Alves";
        $apelido = "Teteu";

        echo "$nome \"$apelido\" $sobrenome";
    ?>
</body>
</html>
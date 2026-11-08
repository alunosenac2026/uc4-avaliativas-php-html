<?php

$sistema = $_GET['sistema'] ?? '';
$linguagem = $_GET['linguagem'] ?? '';
$ferramenta = $_GET['ferramenta'] ?? '';

$sistema = htmlspecialchars($sistema, ENT_QUOTES, 'UTF-8');
$linguagem = htmlspecialchars($linguagem, ENT_QUOTES, 'UTF-8');
$ferramenta = htmlspecialchars($ferramenta, ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Questionário</title>
</head>
<body>

    <h1>Resumo das Respostas</h1>

    <p><strong>Sistema operacional preferido:</strong> <?php echo $sistema; ?></p>

    <p><strong>Linguagem de programação preferida:</strong> <?php echo $linguagem; ?></p>

    <p><strong>Ferramenta mais utilizada:</strong> <?php echo $ferramenta; ?></p>

    <br>

    <a href="formulario.html">Voltar ao questionário</a>

</body>
</html>
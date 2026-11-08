<?php

$nome = $_GET['nome'] ?? '';
$idade = $_GET['idade'] ?? '';

$nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
$idade = htmlspecialchars($idade, ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h1>Dados Recebidos</h1>

    <p>Olá <?php echo $nome; ?>! Você tem <?php echo $idade; ?> anos.</p>

    <a href="idade.html">Voltar</a>

</body>
</html>
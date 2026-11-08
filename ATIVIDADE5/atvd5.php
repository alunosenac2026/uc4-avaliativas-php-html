<?php

$colunas = $_POST['colunas'] ?? 0;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabela</title>
</head>
<body>

    <h1>Tabela Gerada</h1>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && filter_var($colunas, FILTER_VALIDATE_INT) !== false && $colunas > 0): ?>

        <table border="1">

            <tr>

                <?php for ($i = 1; $i <= $colunas; $i++): ?>

                    <td>Coluna <?php echo $i; ?></td>

                <?php endfor; ?>

            </tr>

        </table>

    <?php else: ?>

        <p>Informe um número válido de colunas.</p>

    <?php endif; ?>

    <br>

    <a href="tabela.html">Voltar ao formulário</a>

</body>
</html>
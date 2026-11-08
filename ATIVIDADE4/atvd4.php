<?php

$usuarioCorreto = 'admin';
$senhaCorreta = '123456';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

$autenticado = ($usuario === $usuarioCorreto && $senha === $senhaCorreta);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Login</title>
</head>
<body>

    <h1>Resultado da Autenticação</h1>

    <?php if ($autenticado): ?>

        <h2>Bem-vindo, <?php echo htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8'); ?>!</h2>

        <p>Login realizado com sucesso.</p>

    <?php else: ?>

        <h2>Erro de autenticação!</h2>

        <p>Usuário ou senha incorretos.</p>

    <?php endif; ?>

    <br>

    <a href="login.html">Voltar ao login</a>

</body>
</html>
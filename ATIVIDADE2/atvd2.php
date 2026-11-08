<?php

$nome = $_GET['nome'] ?? '';
$email = $_GET['email'] ?? '';
$telefone = $_GET['telefone'] ?? '';

$busca = $_GET['busca'] ?? '';

$contatos = [];

if ($nome !== '' && $email !== '' && $telefone !== '') {

    $contatos[] = [
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone
    ];

}

$contatosFiltrados = array_filter($contatos, function ($contato) use ($busca) {

    return stripos($contato['nome'], $busca) !== false;

});

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
</head>
<body>

    <h1>Agenda de Contatos</h1>

    <h2>Buscar contato</h2>

    <form action="atvd2.php" method="get">

        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="telefone" value="<?php echo htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8'); ?>">

        <label for="busca">Nome do contato:</label>
        <input type="text" id="busca" name="busca"
               value="<?php echo htmlspecialchars($busca, ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit">Buscar</button>

    </form>

    <h2>Lista de Contatos</h2>

    <?php if (count($contatosFiltrados) > 0): ?>

        <ul>

            <?php foreach ($contatosFiltrados as $contato): ?>

                <li>
                    <strong>Nome:</strong>
                    <?php echo htmlspecialchars($contato['nome'], ENT_QUOTES, 'UTF-8'); ?>
                    <br>

                    <strong>E-mail:</strong>
                    <?php echo htmlspecialchars($contato['email'], ENT_QUOTES, 'UTF-8'); ?>
                    <br>

                    <strong>Telefone:</strong>
                    <?php echo htmlspecialchars($contato['telefone'], ENT_QUOTES, 'UTF-8'); ?>
                </li>

            <?php endforeach; ?>

        </ul>

    <?php else: ?>

        <p>Nenhum contato encontrado.</p>

    <?php endif; ?>

    <br>

    <a href="contatos.html">Voltar ao cadastro</a>

</body>
</html>
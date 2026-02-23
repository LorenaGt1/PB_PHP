<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuários</h2>
    <table border = "1">
        <tr>
            <a href="PB_PHP/mvc_exemplo/usuario/telaCadastro">Ir para a tela cadastrar</a>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $u): ?>
            <tr>
            <td><?= $u["nome"]?></td>
            <td><?= $u["email"]?></td>
            <td>próxima aula</td>
        </tr>
            <?php endforeach; ?>

    </table>
</body>
</html>
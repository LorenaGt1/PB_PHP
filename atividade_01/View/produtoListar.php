<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle interno</title>
</head>
<body>
    <h2>Produtos</h2>
    <table border="1">
        <tr>
            <a href="/PB_PHP/atividade_01/produto/telaCadastro">Ir para a tela cadastrar</a>
            <th>Nome</th>
            <th>Valor</th>
            <th>Estoque</th>
            <th>Data</th>
        </tr>
        <?php foreach($produtos as $id => $p): ?>
            <tr>
            <td><?= $p["nome"]?></td>
            <td><?= $p["valor"]?></td>
            <td><?= $p["estoque"]?></td>
            <td><?= $p["data"]?></td>
            <td>
                <a href="/PB_PHP/atividade_01/produto/telaEditar?id=<?=$id?>">Editar</a>

                <a href="/PB_PHP/atividade_01/produto/excluir?id=<?=$id?>">Excluir</a>
            </td>
        </tr>
            <?php endforeach; ?>
        <table>
</body>
</html>
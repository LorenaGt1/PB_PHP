<!DOCTYPE html>
<html lang="en">
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
        <?php foreach($produtos as $p): ?>
            <tr>
            <td><?= $p["nome"]?></td>
            <td><?= $p["valor"]?></td>
            <td><?= $p["estoque"]?></td>
            <td><?= $p["data"]?></td>
        </tr>
            <?php endforeach; ?>
        <table>
</body>
</html>
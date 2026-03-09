<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca virtual</title>
</head>
<body>
    <h2>Livros</h2>
    <table border = "1">
        <tr>
            <a href="/PB_PHP/mvc_projeto/livro/telaCadastro">Ir para a tela cadastrar</a>
            <th>id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano_publicacao</th>
            <th>Editora</th>
        </tr>
        <?php foreach($livros as $id => $l): ?>
            <tr>
                <td><?= $l["ID"]?></td>
                <td><?= $l["TITULO"]?></td>
                <td><?= $l["AUTOR"]?></td>
                <td><?= $l["ANO_PUBLICACAO"]?></td>
                <td><?= $l["EDITORA"]?></td>
            <td>
                <a href="/PB_PHP/mvc_projeto/livro/telaEditar?id=<?=$l["ID"]?>">Editar</a>

                <a href="/PB_PHP/mvc_projeto/livro/excluir?id=<?=$u["ID"]?>">Excluir</a>

        </td>
        </tr>
        <?php endforeach; ?>

        </table>
        </body>
        </html>


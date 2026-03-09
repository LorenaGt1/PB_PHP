<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca Virtual</title>
    </head>
    <body>
        <a href="/PB_PHP/mvc_projeto/livro/listar">Ir para a tela listar</a>
        <form method="POST" action="Salvar">
            <input type="text" name="id" placeholder="Id do Livro" require>
            <input type="text" name="titulo" placeholder="Titulo do livro" require>
            <input type="text" name="autor" placeholder="Autor do Livro" require>
            <input type="date" name="ano_publicacao" placeholder="Ano de publicação" require>
            <input type="text" name="editora" placeholder="Editora do Livro" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>



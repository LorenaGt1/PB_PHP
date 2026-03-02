<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela editar</title>
    </head>
    <body>
        <h2>Editar produto <h2>
        <a href="/PB_PHP/atividade_01/produto/listar">Ir para a tela listar</a>

        <form method="POST" action="atualizar?id=<?=$_GET["id"]?>">
            <input type="text" name="id" value="<?=htmlspecialchars($_GET["id"])?>"disabled>
            <input type="text" name="nome" value="<?=htmlspecialchars($produto["nome"])?>"require>
            <input type="value" name="valor" value="<?=htmlspecialchars($produto["valor"])?>"require>
            <input type="number" name="estoque" value="<?=htmlspecialchars($produto["estoque"])?>"require>
            <input type="date" name="data" value="<?=htmlspecialchars($produto["data"])?>"require>

            <button type="submit">Editar</button>
        </form>
    </body>
</html>
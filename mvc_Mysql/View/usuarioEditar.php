<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela editar</title>
    </head>
    <body>
        <h2>Editar usuário <h2>
        <a href="/PB_PHP/mvc_Mysql/usuario/listar">Ir para a tela listar</a>

        <form method="POST" action="atualizar?id=<?=$_GET["id"]?>">
            <input type="text" name="id" value="<?=htmlspecialchars($_GET["id"])?>"disable>
            <input type="text" name="nome" value="<?=htmlspecialchars($usuario["NOME"])?>"require>
            <input type="text" name="email" value="<?=htmlspecialchars($usuario["EMAIL"])?>"require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>
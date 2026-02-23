<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Interno</title>
</head>
    <h2>Controle interno </h2>
<body>
    <a href="/PB_PHP/atividade_01/produto/listar">Ir para a tela listar</a>

    <form method="POST" action="Salvar">
            <input type="text" name="nome" placeholder="Nome do produto" require><br><br>
            <input type="value" name="venda" placeholder="Valor da venda" require><br><br>
            <input type="number" name="estoque" placeholder="Estoque" require><br><br>
            <input type="date" name="data" placeholder="Data de validade" require><br><br>
            <button type="submit">Cadastrar Produto</button>
        </form>
    
</body>
</html>
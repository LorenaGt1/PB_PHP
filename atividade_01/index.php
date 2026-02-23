<?php 

require_once "Controller/produtoController.php";

$produtoController = new ProdutoController();
$route = $_GET["route"] ?? '';

switch ($route){
    case "produto/telaCadastro";
        $produtoController -> telaCadastro();
        break;

    case "produto/Salvar";
        $produtoController->cadastrar();
        break;

    case"produto/listar";
        $produtoController -> listarProdutos();
        break;

    default:
    echo "Página não encontrada";
    break;
}
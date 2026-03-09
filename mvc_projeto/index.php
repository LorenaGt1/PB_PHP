<?php
require_once "Controller//LivroController.php";

$LivroController = new LivroController();
$route = $_GET["route"] ?? '';

switch ($route){
    case "livro/telaCadastro":
    $LivroController -> telaCadastro();
    break;

    case "livro/Salvar":
        $LivroController->cadastrar();
        break;

    case "livro/listar":
        $LivroController-> ListarLivros();
        break;

    case "livro/telaEditar":
        $LivroController-> telaEditar();
        break;

    case "livro/atualizar":
        $LivroController->atualizar();
        break;

    case "livro/excluir":
        $LivroController->excluir();
        break;

    default:
    echo "Página não encontrada";
    break;
}
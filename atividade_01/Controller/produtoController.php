<?php 

session_start(); //"banco de dados"
require_once "./Model/ProdutoModel.php";


class ProdutoController{
    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST ["nome"];
        $valor = $_POST ["valor"];
        $estoque = $_POST ["estoque"];
        $data = $_POST ["data"];

        $produto = new Produto($nome, $valor, $estoque, $data);
        $produto->salvar();
        header("Location: /PB_PHP/atividade_01/produto/telaCadastro");
        exit;
    }

    public function listarProdutos(){
        $produtos = Produto::listar();
        echo"<pre>";
        print_r($produtos);
        echo"<pre>";
        require "View/produtoListar.php";
    }
}
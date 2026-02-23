<?php

class Produto{
    private $nome;
    private $valor;
    private $estoque;
    private $data;

    public function __construct($nome, $valor, $estoque, $data){
        $this -> nome = $nome;
        $this -> valor = $valor;
        $this -> estoque = $estoque;
        $this -> data = $data;
    }

    public function salvar(){
        if(!isset($_SESSION["produtos"])){
            $_SESSION["produtos"] = [];
        }

        $_SESSION["produtos"][] = [
            "nome" => $this -> nome,
            "valor" => $this -> valor,
            "estoque" => $this -> estoque,
            "data" => $this -> data
        ];
    }

    public static function listar(){
        // retorna a lista de usuários
        return $_SESSION["produtos"] ?? [];
    }
}
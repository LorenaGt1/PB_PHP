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

     public static function buscar($id){
        // select * from usuarios where id = $id;
        return $_SESSION["produtos"][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION["produtos"][$id])){ // verificar se produto existe
            $_SESSION["produtos"][$id]=[ //atualizar com novos dados
                "nome" => $this ->nome,
                "valor" => $this ->valor,
                "estoque" => $this ->estoque,
                "data" => $this ->data

            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION["produtos"][$id])){ //verifica se o produto existe
            unset($_SESSION["produtos"][$id]); //remove o produto
        }
    }
}
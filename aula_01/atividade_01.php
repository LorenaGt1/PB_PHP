<?php
    session_start();

    function calcularIdade($dataNascimento){
        $data = new DateTime($dataNascimento);
        $idadeatual = new DateTime();
        return $idadeatual -> diff ($data) ->y;
    }

    function calcularMedia($alunos){
        $soma = 0;
        $quantidade = 0;

    foreach ($alunos as $aluno){
        $soma = $soma + intval($aluno["nota"]);
        $quantidade++;
    }

    $media = $soma / $quantidade;

    return $media;
    }

    class Aluno{
        private $nome;
        private $sobrenome;
        private $nota;
        private $dataNascimento;
        private $idade;

        public function __construct($nome, $sobrenome, $nota, $dataNascimento){
            $this ->nome = $nome;
            $this ->sobrenome = $sobrenome;
            $this ->nota = $nota;
            $this ->dataNascimento = $dataNascimento;
            $this ->idade = calcularIdade($dataNascimento);
        }

        public function salvar(){
            if(!isset($_SESSION["alunos"])){
                $_SESSION ["alunos"] = [];
            }

            $_SESSION["alunos"][]= [
                "nome" => $this->nome,
                "sobrenome" => $this->sobrenome,
                "nota" => $this->nota,
                "dataNascimento"=>$this->dataNascimento,
                "idade" => $this->idade
            ];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $nota = $_POST["nota"];
        $dataNascimento = $_POST["dataNascimento"];

        $aluno = new Aluno ($nome, $sobrenome, $nota, $dataNascimento);
        $aluno->salvar();
    }
    if(isset($_GET["reset"])){
    session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title> Formulário </title>
    </head>
    <body>
        <h2 style="color:black; font-family:Arial"> Cadastro de Alunos </h2>
        <form action="" method="POST" style="background:#f2f2f2; padding:15px border-radius:8px; width:300px">
        Nome: <br>
        <input type="text" name="nome" value="" style="width:100%; margin-bottom:10px"><br>
        Sobrenome: <br>
        <input type="text" name="sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
        Nota:<br>
        <input type="number" name="nota" value="" style="width:100%; margin-bottom:10px"><br>
        Data de nascimento:<br>
        <input type="date" name="dataNascimento" value="" style="width:100%; margin-bottom:10px"><br>

        <button type="submit" style="background:gray; color:black; padding:5px 10px;">Cadastrar</button>
        <button type="reset" style="background:gray; color:black; padding:5px 10px;">Limpar</button>
    </form>
    <?php if(isset($_SESSION["alunos"])): ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Nota</th>
                <th>Data Nascimento</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION["alunos"] as $aluno): ?>
            <tr>
                <td><?= $aluno["nome"] ?></td>
                <td><?= $aluno["sobrenome"] ?></td>
                <td><?= $aluno["nota"] ?></td>
                <td><?= $aluno["dataNascimento"] ?></td>
                <td><?= $aluno ['idade'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
        </table>
        <strong>Média dos alunos: <?= calcularMedia($_SESSION["alunos"]) ?></strong>
        <?php endif;?>
    </body>

</html>
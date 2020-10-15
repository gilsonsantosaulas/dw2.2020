<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "sisacademico";
$conexao = new mysqli($host, $usuario, $senha, $bd);

$sql = "select * from alunos order by nome";         //instrucao sql para todos os alunos
$resultadoSql = $conexao->query($sql);               //executa instrucao sql e salva o resultado do sql
$vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Listagem de Alunos</h4>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Matrícula</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($vetorRegistros as $umRegistro) : ?>
                            <tr>
                                <td> <?= $umRegistro["id"]; ?> </td>
                                <td> <?= $umRegistro["nome"]; ?> </td>
                                <td> <?= $umRegistro["matricula"]; ?> </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
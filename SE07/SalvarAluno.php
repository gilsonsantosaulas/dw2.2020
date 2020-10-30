<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "sisacademico";
    $conexao = new mysqli($host, $usuario, $senha, $bd);
    
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];

    $sql = "insert into alunos(nome, matricula, email) values(?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("sss", $nome, $matricula, $email);
    $sqlprep->execute();
?>
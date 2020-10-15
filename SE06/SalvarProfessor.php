<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "sisacademico";
    $conexao = new mysqli($host, $usuario, $senha, $bd);
    
    $nome = $_POST["nome"];
    $end_lattes = $_POST["end_lattes"];
    $telefone = $_POST["telefone"];
    $foto = $_POST["foto"];

    $sql = "insert into professores(nome, end_lattes, telefone, foto) values(?,?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("ssss", $nome, $end_lattes, $telefone, $foto);
    $sqlprep->execute();
?>
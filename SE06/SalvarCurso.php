<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "sisacademico";
    $conexao = new mysqli($host, $usuario, $senha, $bd);
    
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $ppc = $_POST["ppc"];

    $sql = "insert into cursos(nome, tipo, ppc) values(?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("sss", $nome, $tipo, $ppc);
    $sqlprep->execute();
?>
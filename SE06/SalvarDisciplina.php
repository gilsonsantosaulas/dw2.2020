<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "sisacademico";
    $conexao = new mysqli($host, $usuario, $senha, $bd);
    
    $nome = $_POST["nome"];
    $ementa = $_POST["ementa"];
    $chs = $_POST["chs"];

    $sql = "insert into disciplinas(nome, ementa, chs) values(?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("ssi", $nome, $ementa, $chs);
    $sqlprep->execute();
?>
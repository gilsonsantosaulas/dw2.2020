<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "sisacademico";
    $conexao = new mysqli($host, $usuario, $senha, $bd);
    
    $cidade = $_POST["cidade"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];

    $sql = "insert into campus(cidade, endereco, telefone) values(?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("sss", $cidade, $endereco, $telefone);
    $sqlprep->execute();
?>
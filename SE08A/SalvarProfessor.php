<?php 
    require_once('Conexao.php');
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $end_lattes = $_POST["end_lattes"];
    $telefone = $_POST["telefone"];
    $foto = $_POST["foto"];
    
    if($id==0) { // se o id for 0 eh um novo registro (insert)
        $sql = "insert into professores(nome, end_lattes, telefone, foto) values(?,?,?,?)";
        $sqlprep = $conexao->prepare($sql);
        $sqlprep->bind_param("ssss", $nome, $end_lattes, $telefone, $foto);
        $sqlprep->execute();
    } else {
		$sql = "update professores set nome=?, end_lattes=?, telefone=?, foto=? where id=?";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("ssssi", $nome, $end_lattes, $telefone, $foto, $id);            
		$sqlprep->execute();
		$msgOk = "Professor atualizado com sucesso.";        
    }
?>

<?php header('location: ListaProfessor.php?msgOk='.$msgOk); ?>
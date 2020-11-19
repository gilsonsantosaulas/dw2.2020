<?php 
	//pegar id do aluno que será removido
	$id = $_POST["id"];
	
    require_once('Conexao.php');

	$sql = "delete from professores where id = ?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("i", $id);            
	$sqlprep->execute();

	$msgOk = "Professor removido com sucesso.";
    
?>
<?php header('location: ListaProfessor.php?msgOk='.$msgOk); ?>
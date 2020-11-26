<?php require_once('Protege.php'); ?>
<?php 
	//pegar id do aluno que será removido
	$id = $_POST["id"];
	
    require_once('Conexao.php');

	$sql = "delete from alunos where id = ?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("i", $id);            
	$sqlprep->execute();

	$msgOk = "Aluno removido com sucesso.";
    
?>
<?php header('location: ListaAluno.php?msgOk='.$msgOk); ?>
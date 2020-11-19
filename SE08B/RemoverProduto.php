<?php 
	//pegar id do aluno que será removido
	$id = $_POST["id"];
	
    require_once('Conexao.php');

	$sql = "delete from produtos where id = ?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("i", $id);            
	$sqlprep->execute();

	$msgOk = "Produto removido com sucesso.";
    
?>
<?php header('location: ListaProduto.php?msgOk='.$msgOk); ?>
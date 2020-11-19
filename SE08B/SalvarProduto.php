<?php 
	//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$valor = $_POST["valor"];
    require_once('Conexao.php');

    if($id==0) { // se o id for 0 eh um novo registro (insert)
		$sql = "insert into produtos(nome, valor) values (?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sd", $nome, $valor);            
		$sqlprep->execute();
		$msgOk = "Produto inserido com sucesso.";
	} else { // ser o id nao for 0 eh um atualizacao (update)
		$sql = "update produtos set nome=?, valor=? where id=?";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("ssi", $nome, $valor, $id);            
		$sqlprep->execute();
		$msgOk = "Produto atualizado com sucesso.";
	}
    
?>
<?php header('location: ListaProduto.php?msgOk='.$msgOk); ?>
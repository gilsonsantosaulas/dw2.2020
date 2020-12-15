<?php 
	//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$media = $_POST["media"];
    require_once('Conexao.php');

    if($id==0) { // se o id for 0 eh um novo registro (insert)
		$sql = "insert into alunos(nome, media) values (?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sd", $nome, $media);            
		$sqlprep->execute();
		$msgOk = "Aluno inserido com sucesso.";
	} else { // ser o id nao for 0 eh um atualizacao (update)
		$sql = "update alunos set nome=?, media=? where id=?";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sdi", $nome, $media, $id);            
		$sqlprep->execute();
		$msgOk = "Aluno atualizado com sucesso.";
	}
    
?>
<?php header('location: ListaAluno.php?msgOk='.$msgOk); ?>
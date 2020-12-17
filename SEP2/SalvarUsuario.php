<?php
require_once('Conexao.php');

//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
$id = $_POST["id"];
$senha = $_POST["senha"];


$sql = "update usuarios set senha=? where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("si", $senha, $id);
$sqlprep->execute();
$msgOk = "Senha atualizada com sucesso.";

?>
<?php header('location: ListaUsuario.php?msgOk=' . $msgOk); ?>
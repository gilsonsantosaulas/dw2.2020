<?php
require_once('Conexao.php');

//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
$id = $_POST["id"];
$email = $_POST["email"];


$sql = "update usuarios set senha=? where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sssi", $nome, $email, $nome_arquivo, $id);
$sqlprep->execute();
$msgOk = "Senha atualizada com sucesso.";

?>
<?php header('location: ListaUsuario.php?msgOk=' . $msgOk); ?>
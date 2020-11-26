<?php
	require_once('Cabecalho.php'); // session_start()
	require_once("Conexao.php");

	$email = $_POST["email"];
	$senha = $_POST["senha"];

  $sql = "select * from usuarios where email=? and senha=?";
  $sqlprep = $conexao->prepare($sql);
  $sqlprep->bind_param("ss", $email, $senha);
  $sqlprep->execute();
  $resultadoSql = $sqlprep->get_result();
  $vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros

  if(count($vetorRegistros)>0) { // se tem algo, usuario ok
  	$_SESSION["email"]=$email;
  	header("location: ListaAluno.php");
  } else {
  	$_SESSION["erroLogin"]="Erro de Login ou senha.";
  	header("location: FormLogin.php");
  }

?>

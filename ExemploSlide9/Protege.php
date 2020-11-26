<?php
    require_once('Cabecalho.php'); // abrir o session_start()
    if(isset($_SESSION["email"])==false) {
        $_SESSION["erroLogin"]="Erro de Login ou Senha.";
        header("location: FormLogin.php");
    }

?>
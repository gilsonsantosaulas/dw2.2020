<?php require_once('Protege.php'); ?>
<?php require_once('Cabecalho.php'); ?>
<?php require_once('Conexao.php');  ?>

<?php
/*
      codigo utilizado para buscar um registro se for atualizar ou deixar o form em branco
      se for inserir
    */
$sql = "select * from usuarios where id=?"; // seleciona o registro pelo id
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $_SESSION["idusuario"]);
$sqlprep->execute();
$resultadoSql = $sqlprep->get_result(); // pega o resultado do sql
$vetorUmRegistro = $resultadoSql->fetch_assoc(); // coloca o primeiro e único registro na variavel

?>




<div class="panel panel-default">
    <div class="panel-heading">Trocar Senha</div>
    <div class="panel-body">
        <!-- atencao ao action do formulario  -->
        <form action="salvarUsuario.php" method="post">
            <div class="form-group">
                <label for="id">Id</label>
                <!-- importante usar o value do input para adicionar o valor recuperado do BD -->
                <input type="text" class="form-control" id="id" name="id" placeholder="(automático)" readonly="true" value="<?= $vetorUmRegistro['id']; ?>">
            </div>
            <!-- atencao ao atributo name dos inputs  -->
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $vetorUmRegistro['email']; ?>" readonly="true">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" value="<?= $vetorUmRegistro['senha']; ?>">
            </div>


            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

<?php require_once('Rodape.php'); ?>
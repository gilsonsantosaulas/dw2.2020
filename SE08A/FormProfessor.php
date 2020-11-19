<?php require_once('Cabecalho.php'); ?>
<?php require_once('Conexao.php');  ?>

<?php
/*
      codigo utilizado para buscar um registro se for atualizar ou deixar o form em branco
      se for inserir
    */

if (isset($_POST['id'])) {   // se existe posição id no vetor $_POST
    $id = $_POST['id'];     // arquivo foi chamado pelo form da listagem
} else {
    $id = 0;                // arquivo não foi chamado pelo form da listagem e sim pelo botao novo
}
$sql = "select * from professores where id=?"; // seleciona o registro pelo id
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $id);
$sqlprep->execute();
$resultadoSql = $sqlprep->get_result(); // pega o resultado do sql
$vetorUmRegistro = $resultadoSql->fetch_assoc(); // coloca o primeiro e único registro na variavel

?>

<div class="container">
    <form action="SalvarProfessor.php" method="POST">
        <div class="form-group">
            <label for="id">Id</label>
            <!-- importante usar o value do input para adicionar o valor recuperado do BD -->
            <input type="text" class="form-control" id="id" name="id" placeholder="(automático)" readonly="true" value="<?= $vetorUmRegistro['id']; ?>">
        </div>

        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $vetorUmRegistro['nome']; ?>">
        <label for="">Endereço Lattes</label>
        <input type="text" name="end_lattes" class="form-control" value="<?= $vetorUmRegistro['end_lattes']; ?>">
        <label for="">Telefone</label>
        <input type="text" name="telefone" class="form-control" value="<?= $vetorUmRegistro['telefone']; ?>">
        <label for="">Foto</label>
        <input type="text" name="foto" class="form-control" value="<?= $vetorUmRegistro['foto']; ?>">
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
</div>


<?php require_once('Rodape.php'); ?>
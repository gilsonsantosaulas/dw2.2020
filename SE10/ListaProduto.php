<?php require_once('Protege.php'); ?>
<?php
/*codigo utilizado para recuperar registros*/
require_once('Conexao.php');
$sql = "select * from produtos order by nome";         //instrucao sql para todos os alunos
$resultadoSql = $conexao->query($sql);               //executa instrucao sql e salva o resultado do sql
$vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros
?>




<?php require_once('Cabecalho.php'); ?>


<?php /*codigo utilizado para exibir mensagem*/ ?>
<?php if (isset($_GET["msgOk"])) : ?>
    <div class="bg-success">
        <?= $_GET["msgOk"]; ?>
    </div>
<?php endif ?>


<a class="btn btn-primary" href="FormProduto.php">Novo Produto</a>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Listagem de Produtos</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">Foto</th>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($vetorRegistros as $umRegistro) : ?>
                    <tr>
                        <td>
                            <img src="<?= $umRegistro["foto"]; ?>" class="img-responsive">
                            </img>
                        </td>
                        <th> <?= $umRegistro["id"]; ?> </th>
                        <td> <?= $umRegistro["nome"]; ?> </td>
                        <td> <?= $umRegistro["valor"]; ?> </td>
                        <td>
                            <form action="FormProduto.php" method="post">
                                <input type="hidden" name="id" value="<?= $umRegistro["id"]; ?>">
                                <button type="submit" class="btn btn-success">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form action="RemoverProduto.php" method="post">
                                <input type="hidden" name="id" value="<?= $umRegistro["id"]; ?>">
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>

        </table>
    </div>
</div>

<?php require_once('Rodape.php'); ?>
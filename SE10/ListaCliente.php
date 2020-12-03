<?php require_once('Protege.php'); ?>
<?php
/*codigo utilizado para recuperar registros*/
require_once('Conexao.php');
$sql = "select * from clientes order by nome";         //instrucao sql para todos os alunos
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


<a class="btn btn-primary" href="FormCliente.php">Novo Cliente</a>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Listagem de Clientes</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">Foto</th>
                    <th>id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
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
                        <td> <?= $umRegistro["email"]; ?> </td>
                        <td>
                            <form action="FormCliente.php" method="post">
                                <input type="hidden" name="id" value="<?= $umRegistro["id"]; ?>">
                                <button type="submit" class="btn btn-success">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form action="RemoverCliente.php" method="post">
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
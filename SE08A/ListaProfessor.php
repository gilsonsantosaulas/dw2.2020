<?php
require_once('Conexao.php');

$sql = "select * from professores order by nome";         //instrucao sql para todos os alunos
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



<a class="btn btn-primary" href="FormProfessor.php">Novo Professor</a>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Listagem de Professores</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Lattes</th>
                    <th>Telefone</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($vetorRegistros as $umRegistro) : ?>
                    <tr>
                        <td> <?= $umRegistro["id"]; ?> </td>
                        <td> <?= $umRegistro["nome"]; ?> </td>
                        <td> <?= $umRegistro["end_lattes"]; ?> </td>
                        <td> <?= $umRegistro["telefone"]; ?> </td>
                        <td>
                            <form action="FormProfessor.php" method="post">
                                <input type="hidden" name="id" value="<?= $umRegistro["id"]; ?>">
                                <button type="submit" class="btn btn-success">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form action="RemoverProfessor.php" method="post">
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
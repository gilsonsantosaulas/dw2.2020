<?php require_once('Protege.php'); ?>
<?php require_once('Cabecalho.php'); ?>
<?php require_once('Conexao.php'); ?>

<?php
/*codigo utilizado para recuperar registros*/
$sql = "select * from usuarios";         //instrucao sql para todos os alunos
$resultadoSql = $conexao->query($sql);               //executa instrucao sql e salva o resultado do sql
$vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros
?>







<?php /*codigo utilizado para exibir mensagem*/ ?>
<?php if (isset($_GET["msgOk"])) : ?>
    <div class="bg-success">
        <?= $_GET["msgOk"]; ?>
    </div>
<?php endif ?>


<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Usuário</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vetorRegistros as $umRegistro) : ?>
                    <tr>
                        <th> <?= $umRegistro["id"]; ?> </th>
                        <td> <?= $umRegistro["email"]; ?> </td>
                    </tr>
                <?php endforeach ?>

            </tbody>

        </table>
    </div>
</div>

<?php require_once('Rodape.php'); ?>
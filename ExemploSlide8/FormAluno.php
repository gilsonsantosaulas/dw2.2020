<?php require_once('Cabecalho.php'); ?>
<?php require_once('Conexao.php');  ?>

<?php 
    /*
      codigo utilizado para buscar um registro se for atualizar ou deixar o form em branco
      se for inserir
    */

    if(isset($_POST['id'])) {   // se existe posição id no vetor $_POST
        $id = $_POST['id'];     // arquivo foi chamado pelo form da listagem
    } else {
        $id = 0;                // arquivo não foi chamado pelo form da listagem e sim pelo botao novo
    }
    $sql = "select * from alunos where id=?"; // seleciona o registro pelo id
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $id);          
    $sqlprep->execute();
    $resultadoSql = $sqlprep->get_result(); // pega o resultado do sql
    $vetorUmRegistro = $resultadoSql->fetch_assoc(); // coloca o primeiro e único registro na variavel

?>




            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Aluno</div>
                <div class="panel-body">
<!-- atencao ao action do formulario  -->  
                    <form action="salvarAluno.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id">Id</label>
<!-- importante usar o value do input para adicionar o valor recuperado do BD -->
                            <input type="text" class="form-control" id="id" name="id" placeholder="(automático)" readonly="true" value="<?=$vetorUmRegistro['id'];?>">
                        </div>
<!-- atencao ao atributo name dos inputs  -->   
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?=$vetorUmRegistro['nome'];?>">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Matrícula</label>
                             <input type="text" class="form-control" id="matricula" name="matricula" value="<?=$vetorUmRegistro['matricula'];?>">
                        </div>
                        <!--  arquivo foto-->
                        <div class="form-group">
                            <label for="foto">Foto do aluno</label>
                             <input type="file" class="form-control" id="foto" 
                                    name="foto">
                             <div class="row">
                                <img class="col-md-1 img-responsive" 
                                     src="<?=$vetorUmRegistro['foto'];?>">
                                </img>
                             </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>

<?php require_once('Rodape.php'); ?>
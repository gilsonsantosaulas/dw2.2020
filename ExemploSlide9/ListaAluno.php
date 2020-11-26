<?php require_once('Protege.php'); ?>
<?php 
    require_once('Conexao.php');

    if(isset($_POST["pesquisa"])) {                                 // se veio algo do form de pesquisa
        $pesquisa = $_POST["pesquisa"];                             // pega o valor que veio do form pesquisa
        $pesquisaLike = "%" . $pesquisa . "%";                      // concatena caracteres %
        $sql = "select * from alunos where nome like ? order by nome"; //instrucao sql que sera executada        
        $sqlprep = $conexao->prepare($sql);                         //prepara sql
        $sqlprep->bind_param("s", $pesquisaLike);                   //atribui parametros ao sql
        $sqlprep->execute();                                        //executa o sql
        $resultadoSql = $sqlprep->get_result();                     //pega o resultado do sql           
    } else {                                                        //se nao veio nada do form pesquisa
        $pesquisa="";                                               //cria uma variavel $pesquisa para o value do form pesquisa
        $sql = "select * from alunos order by nome";                //instrucao sql para todos os alunos
        $resultadoSql = $conexao->query($sql);               //executa instrucao sql e salva o resultado do sql
    }

    $vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros
 ?>        


<?php require_once('Cabecalho.php'); ?>


<?php  if(isset($msgOk)) :?>

    <div class="bg-success">   

    <?=$msgOk; ?>

    </div>
    
<?php endif ?>              


    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary" href="FormAluno.php">Novo Aluno</a>
        </div>
        <div class="col-md-8">
<!-- form pesquisa -->
            <form action="ListaAluno.php" 
                    method="post" 
                    class="form-inline text-right">
                <div class="form-group">
                    <label for="descricao">Pesquisa por nome</label>
                     <input type="text" class="form-control" 
                            id="pesquisa" name="pesquisa" 
                            value="<?=$pesquisa; ?>">
                    <button type="submit" class="btn btn-default">Pesquisar</button>
                </div>      
            </form>
<!-- fim form pesquisa -->
        </div>
    </div>            

    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Listagem de Alunos</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="col-md-1">Foto</th>
                          <th>id</th>
                          <th>Nome</th>
                          <th>Matrícula</th>
                          <th>Alterar</th>
                          <th>Remover</th>                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php foreach($vetorRegistros as $umRegistro): ?>
                        <tr>
                            <td> 
                                <img src="<?=$umRegistro["foto"];?>" 
                                     class="img-responsive">
                                </img> 
                            </td>
                            <th> <?=$umRegistro["id"];?> </th>
                            <td> <?=$umRegistro["nome"];?> </td>
                            <td> <?=$umRegistro["matricula"];?> </td>
                            <td>
                                <form action="FormAluno.php" method="post">
                                    <input type="hidden" name="id" value="<?=$umRegistro["id"];?>">
                                    <button type="submit" class="btn btn-success">Alterar</button>
                                </form>
                            </td>                            
                            <td>
                                <form action="RemoverAluno.php" method="post">
                                    <input type="hidden" name="id" value="<?=$umRegistro["id"];?>">
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
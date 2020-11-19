<html>
    <head>
        <title></title>
        <!-- usar bootstrap online -->
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>

        <div class="container">
            <!-- título http://getbootstrap.com/components/#jumbotron -->
            <div class="jumbotron">
                <h1 class="text-center">Sistema Acadêmico</h1>
            </div>

            <!-- navegação http://getbootstrap.com/components/#navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" 
                                data-toggle="collapse" 
                                data-target="#bs-example-navbar-collapse-1" 
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" 
                         id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Início</a></li>
                            <li><a href="ListaAluno.php">Alunos</a></li>                            
                            <li><a href="ListaProfessor.php">Professores</a></li>                            
                            <li><a href="ListaDisciplina.php">Disciplinas</a></li>                           
                        </ul>
                    </div>
            </nav>
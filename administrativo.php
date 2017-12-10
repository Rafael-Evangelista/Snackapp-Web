<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Rafael - Evangelista">
    <link rel="icon" href="imagens/voxus_logo.png">

    <title>Voxus</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-left navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
                <a class="brand pull-left"><img src="imagens/voxus_logo.png" width="40" /></a>
                <div class="navbar-header">
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Usuários</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tasks <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="CadastroDeTasks.php">Adicionar Tasks</a></li>
                            <li><a href="Consultar.php">Consultar Tasks</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-right">
                    <a class="navbar-brand" href="index.php">Sair</a>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1>Usuários</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Inscrição</th>
                            <th>Nome</th>
                            <th>Situação</th>
                            <th>Nivel de acesso</th>
                            <th>Cadastrado</th>
                            <b></b></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rafael Evangelista</td>
                            <td>Ativo</td>
                            <td>Administrador</td>
                            <td>10/12/2017 10:15:20</td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')

    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>

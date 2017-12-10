<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="imagens/voxus_logo.png">


    <title>Cadastro de Tasks</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body>
    <?php include 'navbar.php';?>
    <div class="container">
        <form class="form-signin" name="loginform" method="POST" action="GravarTasks.php" enctype="multipart/form-data">
            <h2 class="form-signin-heading">Nova Tasks
                <img src="imagens/voxus_logo.png" width="50">
            </h2>
            <label for="inputdesc" class="sr-only">Código</label>
            <input type="cod" name="codigo" id="inputdesc" class="form-control" placeholder="Código" disabled><br>
            <label for="inputnome" class="sr-only">Nome</label>
            <input type="nome" name="nome" id="inputcat" class="form-control" placeholder="Nome"><br>
            <label for="inputdesc" class="sr-only">Descrição</label>
            <textarea  type="desc" name="descricao" id="inputdesc" class="form-control" placeholder="Descrição"></textarea><br>
            <label for="inputarquivo" class="sr-only">Arquivo</label>
            <input type="file" name="arquivo" size="20" id="inputcat" class="form-control" placeholder="Arquivo"><br>
           <button class="btn btn-lg btn-danger btn-block" name="guardar" type="submit">Guardar</button>
            <?php
            if ( isset( $_POST['Submit'] ) ){
              echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
              echo "<script>ProdutoAdicionado()</script>";  
            }
          ?>
        </form>
        <form class="form-signin" name="loginform" method="post" action="administrativo.php">
            <button class="btn btn-lg btn-default btn-block" Onclick="administrativo.php">Voltar</button>
        </form>
    </div>


</body>
<script src="js/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')

</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

</html>

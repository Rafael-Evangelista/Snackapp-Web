<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak - Celke">
    <link rel="icon" href="imagens/logo.png">


    <title>Cadastro de Produtos</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body>

    <div class="container">
        <form class="form-signin" name="loginform" method="post" action="gravarproduto.php">
            <h2 class="form-signin-heading">Novo Produto
                <img src="imagens/Logo.png" width="70">
            </h2>
            <label for="inputdesc" class="sr-only">Código</label>
            <input type="cod" name="codigo" id="inputdesc" class="form-control" placeholder="Código" disabled><br>
            <label for="inputdesc" class="sr-only">Descrição</label>
            <input type="desc" name="descricao" id="inputdesc" class="form-control" placeholder="Descrição"><br>
            <label for="inputcategoria" class="sr-only">Categoria</label>
            <input type="categoria" name="categoria" id="inputcat" class="form-control" placeholder="Categoria"><br>
            <label for="inputprecoVenda" class="sr-only">Preço de Venda</label>
            <input type="precoVenda" name="precovenda" id="inputvenda" class="form-control" placeholder="Preço de Venda"><br>
            <label for="inputprecoCusto" class="sr-only">Preço de Custo</label>
            <input type="precoCusto" name="precocusto" id="inputcusto" class="form-control" placeholder="Preço de Custo"><br>
            <label for="inputvalor" class="sr-only">Quantidade</label>
            <input type="qtd" name="quantidade" id="inputqtd" class="form-control" placeholder="quantidade"><br>
            <label for="inputunidade" class="sr-only">Unidade de Medida</label>
            <input type="unidade" name="medida" id="inputunidade" class="form-control" placeholder="Unidade De Medida"><br>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Guardar</button>
        </form>
        <form class="form-signin" name="loginform" method="post" action="administrativo.php">
            <button class="btn btn-lg btn-default btn-block" Onclick="administrativo.php">Voltar</button>
        </form>
    </div>
    <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>

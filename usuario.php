<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="imagens/voxus_logo.png">


    <title>Cadastro de Usuário</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body>
    <div class="container">
        <form class="form-signin" name="loginform" method="POST" action="GravarUsuario.php">
            <h2 class="form-signin-heading">Novo Usuário
                <img src="imagens/voxus_logo.png" width="50">
            </h2>
            <label for="inputdesc" class="sr-only">Código</label>
            <input type="cod" name="codigo" id="inputdesc" class="form-control" placeholder="Código" disabled><br>
            <label for="inputnome" class="sr-only">Nome</label>
            <input type="nome" name="nome" id="inputcat" class="form-control" placeholder="Nome"><br>
            <label for="inputsobrenome" class="sr-only">SobreNome</label>
            <input type="sobrenome" name="sobrenome" id="inputcat" class="form-control" placeholder="SobreNome"><br>
            
            
                <select class="selectpicker" name="estado"> 
                <option value="ac">Acre</option> 
                <option value="al">Alagoas</option> 
                <option value="am">Amazonas</option> 
                <option value="ap">Amapá</option> 
                <option value="ba">Bahia</option> 
                <option value="ce">Ceará</option> 
                <option value="df">Distrito Federal</option> 
                <option value="es">Espírito Santo</option> 
                <option value="go">Goiás</option> 
                <option value="ma">Maranhão</option> 
                <option value="mt">Mato Grosso</option> 
                <option value="ms">Mato Grosso do Sul</option> 
                <option value="mg">Minas Gerais</option> 
                <option value="pa">Pará</option> 
                <option value="pb">Paraíba</option> 
                <option value="pr">Paraná</option> 
                <option value="pe">Pernambuco</option> 
                <option value="pi">Piauí</option> 
                <option value="rj">Rio de Janeiro</option> 
                <option value="rn">Rio Grande do Norte</option> 
                <option value="ro">Rondônia</option> 
                <option value="rs">Rio Grande do Sul</option> 
                <option value="rr">Roraima</option> 
                <option value="sc">Santa Catarina</option> 
                <option value="se">Sergipe</option> 
                <option value="sp">São Paulo</option> 
                <option value="to">Tocantins</option> 
               </select>
             <br><br>
            <label for="inputcidade" class="sr-only">Cidade</label>
            <input type="cidade" name="cidade" id="inputdesc" class="form-control" placeholder="Cidade"><br>
            <label for="login" class="sr-only">Login</label>
            <input type="login" name="login" id="inputdesc" class="form-control" placeholder="Email"><br>
            <label for="senha" class="sr-only">Senha</label>
            <input type="senha" name="senha" id="inputdesc" class="form-control" placeholder="Senha"><br>
            <button class="btn btn-lg btn-danger btn-block" name="cadastrar" type="submit">Cadastrar</button>
            <?php
            if ( isset( $_POST['Submit'] ) ){
              echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
              echo "<script>ProdutoAdicionado()</script>";  
            }
          ?>
        </form>
        <form class="form-signin" name="loginform" method="post" action="index.php">
            <button class="btn btn-lg btn-default btn-block" Onclick="index.php">Voltar</button>
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

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackApp</title>
    <meta name="author" content="Rafael - Evangelista">
    <link rel="icon" href="imagens/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <form class="login-form" name="loginform" method="post" action="userauthentication.php">
        <img id="logo" style="margin-left: 80px;" src="imagens/Logo.png" width='60%' height='60%'>
        <h1>SnackApp</h1>
        <div class="form-group ">
            <input type="email" class="form-control" name="login" placeholder="Usuário " id="UserName" required='required'>
            <i class="fa fa-user"></i>
        </div>
        <div class="form-group">
            <input type="password" id="senha" class="form-control" name="senha" placeholder="Senha" id="Passwod" required='required'>
            <i class="fa fa-lock"></i>
        </div>
        <button type="submit" class="log-btn">Entrar</button>
        <a class="link" href="#" style="margin-top: 20px">Esqueceu a senha?</a>
    </form>
    <img id='playstore' src='imagens/play_store.png'>
</body>

</html>

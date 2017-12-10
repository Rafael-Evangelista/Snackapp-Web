<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voxus</title>
    <meta name="author" content="Rafael - Evangelista">
    <link rel="icon" href="imagens/voxus_logo.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <form class="login-form" name="loginform" method="post" action="userauthentication.php">
        <img id="logo" style="margin-left: 115px;" src="imagens/voxus_logo.png" width='25%' height='25%'>
       <h1>Voxus</h1>
        <div class="form-group ">
            <input type="email" class="form-control" name="login" placeholder="Usuário " id="UserName" required='required'>
            <i class="fa fa-user"></i>
        </div>
        <div class="form-group">
            <input type="password" id="senha" class="form-control" name="senha" placeholder="Senha" id="Passwod" required='required'>
            <i class="fa fa-lock"></i>
        </div>
        <button type="submit" class="log-btn">Entrar</button><br>
        <a class="link" href="usuario.php" style="margin-top:20px width:55%; margin-right:40%;">Cadastre-se</a><br>
        
        
    </form>
    <br>
    <img id='playstore' src='imagens/play_voxus.png'>
</body>

</html>

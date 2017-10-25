<?php

include_once ('conexao.php');
$host = "localhost";
$user = "root";
$pass = "";
$banco = "snackapp";

?>
    <html>

    <head>

        <title>Autenticando usuário</title>
        <script type="text/javascript">
            function loginsucessfully() {
                setTimeout("window.location='administrativo.php'", 5000);
            }

            function loginfailed() {
                setTimeout("window.location='index.php'", 5000);
            }

        </script>

    </head>

    </html>

    <?php

$login=$_POST['login'];
$senha=$_POST['senha'];

$sql = ("SELECT * FROM spp_usuarios WHERE login = '$login' and senha = '$senha'") or die(mysqli_error());
$link = DBConnect();
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);


if($row > 0){
    session_start();
    $_SESSION['login']=$_POST['login'];
    $_SESSION['senha']=$_POST['senha'];
    echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
    echo "<script>loginsucessfully()</script>";

} else{
    echo "<center>Nome de usuario ou senha invalidos</center>";
    echo "<script>loginfailed()</script>";
}
?>

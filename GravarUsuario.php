<?php

 include_once ('conexao.php');
// $codigo = $_POST['codigo'];
 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $estado = $_POST['estado'];
 $cidade = $_POST['cidade']; 
 $login = $_POST['login'];
 $senha = $_POST['senha'];
 
   
 $usuario_add = "INSERT INTO spp_usuarios (nome ,sobrenome, estado, cidade, login, senha) values ('$nome', '$sobrenome', '$estado', '$cidade', '$login', '$senha')";
 $link = DBConnect();
 $resultado_usuario = mysqli_query($link, $usuario_add);
 DBClose($link);
 
echo "<center>Usuário adicionada com sucesso!</center>";
?>
<?php

include_once("conexao.php");
$dados = json_decode(file_get_contents('php://input'),true);

$nome = $dados['nome'];
$login = $dados['login'];
$senha = $dados['senha'];

echo $nome;
echo $login;
echo $senha;


//echo var_dump($dados);

//$retorno = array('status','ok');

//echo json_encode($dados);


//$dados = (sizeof($dados)==0)? $_POST : $dados;
//$keys = array_keys($dados); 
////			
////$cadastro_usuario = ("INSERT INTO ssp_usuarioapp (".implode(',', $keys).") VALUES (:".implode(",:", $keys).")");
////$link = DBConnect();
////$cadastro_usuario = mysqli_query($link, $cadastro_usuario);
////DBClose($link);
////return $cadastro_usuario;


$cadastro_usuario = "INSERT INTO ssp_usuarioapp (nome, login, senha) values ('$nome', '$login', '$senha')";
$link = DBConnect();
$cadastro_usuario = mysqli_query($link, $cadastro_usuario);

DBClose($link);
return $cadastro_usuario;


?>
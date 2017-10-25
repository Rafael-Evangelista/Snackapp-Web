<?php

 include_once ('conexao.php');
 $codigo = $_POST['codigo'];
 $descricao = $_POST['descricao']; 
 $categoria = $_POST['categoria'];
 $precovenda = $_POST['precovenda'];
 $precocusto = $_POST['precocusto'];
 $quantidade = $_POST['quantidade'];
 $medida = $_POST['medida'];

 $produtos_add = "INSERT INTO spp_produtos (descricao, categoria, precovenda, precocusto, quantidade,medida) values ('$descricao', '$categoria', '$precovenda', '$precocusto', '$quantidade', '$medida')";
 $link = DBConnect();
 $resultado_produtos = mysqli_query($link, $produtos_add);

 DBClose($link);
 return $resultado_produtos;

?>

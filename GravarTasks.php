<?php

 include_once ('conexao.php');
// $codigo = $_POST['codigo'];
 $nome = $_POST['nome']; 
 $descricao = $_POST['descricao'];
 
$msg = false;

if(isset($_FILES['arquivo'])){
     
     $arquivo = $_FILES['arquivo']['name'];
    
//     $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
////   $novo_nome = md5(time());
     $diretorio = "uploads/";
    
     move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$arquivo);
      
}
     
 $tasks_add = "INSERT INTO spp_tasks (nome ,descricao, arquivo) values ('$nome', '$descricao', '$arquivo')";
 $link = DBConnect();
 $resultado_produtos = mysqli_query($link, $tasks_add);
 DBClose($link);
 
echo "<center>Tasks adicionada com sucesso!</center>";

?>


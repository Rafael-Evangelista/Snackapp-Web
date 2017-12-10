<?php
	include_once("conexao.php");
    $link = DBConnect();
    $codigo = mysqli_real_escape_string($link, $_POST['codigo']);
    $nome = mysqli_real_escape_string($link, $_POST['nome']);
    $descricao = mysqli_real_escape_string($link, $_POST['descricao']);

echo "$codigo - $nome - $descricao";
	$result_tasks = "UPDATE spp_tasks SET nome='$nome',descricao='$descricao' WHERE codigo = '$codigo'";
    
	$resultado_tasks = mysqli_query($link, $result_tasks);	
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
		if(mysqli_affected_rows($link) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Voxus/Consultar.php'>
				<script type=\"text/javascript\">
					alert(\"Tasks alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Voxus/index.php'>
				<script type=\"text/javascript\">
					alert(\"tasks não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $link->close(); ?>

<html>

<body>

    <?php
    require 'conexao.php';
    require 'database.php';
    
    $produtos = DBRead('produtos');
    var_dump($produtos);
    
    
//
//    $produtos = array(
//        'codigo' => '',
//        'descricao' => 'suco de uva',
//        'categoria' => 'suco',
//        'precovenda' => 5,
//        'precocusto' => 2,
//        'quantidade' => 100,
//        'medida' => 'copo'
//);
//    
//      
//    $grava = DBCreate('produtos', $produtos);
//
//    
//    
//    if($grava)
//        echo "OK";
//    else
//        echo":/";
//    
    
    
?>



</body>

</html>

<html>

<body>

    <?php
include_once ('conexao.php');
 
//Altera Registros
function DBUpdate ($table, array $data, $where= null){
  $table = DB_PREFIX.'_'.$table;
  $where = ($where) ? " WHERE {$where}" : null;
    
  $query = "UPDATE tabela SET campo1 = 'valor1, campo2 = 'valor2'"
  echo $query  
}   
    
    
    
//ler Registros
function DBRead($table, $params = null, $fields = '*'){
 $table = DB_PREFIX.'_'.$table;
 $params = ($params) ? "  {$params}" : null;
    
 $query = "SELECT {$fields} FROM {$table}{$params}";
 $result = DBExecute($query);
    
    if(!mysqli_num_rows($result))
     return false;
    else{
        while ($res = mysqli_fetch_assoc($result))
        $data[] = $res;
    }
    return $data;  
}

//Grava Registro
function DBCreate($table, array $data){
    $table = DB_PREFIX.'_'.$table;
    $data = DBEscape($data);
    
        $fields = implode(',', array_keys($data));
        $values = "'".implode("', '", $data)."'";


        $query = "INSERT INTO {$table} ({$fields}) VALUES ({$values} )";

        return DBExecute ($query);
}

//Executa Querys
function DBExecute($query){
 
    
 $result = @mysqli_query($link, $query) or die(mysqli_error($link));
     
     DBClose($link);
     return $result;
}

?>


</body>

</html>

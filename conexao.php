<?php
 define('DB_HOSTNAME', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', "");
 define('DB_DATABASE', 'snackapp');
 define('DB_PREFIX', 'spp');
 define('DB_CHARSET', 'utf8');

?>


    <?php
//Protege contra SQL Injection

function DBEscape($data){
    $link = DBConnect();
    
    if(!is_array($data))
        $dados = mysqli_real_escape_string($link, $data);
    else{
        $arr = $data;
        
        foreach($arr as $key => $value){
            $key = mysqli_real_escape_string($link, $key);
            $value = mysqli_real_escape_string($link, $value);
            
            $data[$key] = $value;
        }
    }
    DBClose($link);
    return $data;
    
}


//Fecha Conexão com MYSQL

function DBClose($link){
 mysqli_close($link) or die(mysqli_error($link));   
}


//Abre Conexão

function DBConnect(){
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE)or die(mysqli_connect_error());
    mysqli_set_charset($link, DB_CHARSET) or die(mysql_error($link));
    
    return $link;
}
    

?>

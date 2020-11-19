<?php

try{
    $pdo = new PDO('mysql:dbname=votacao;host=localhost', 'root', "");

}catch(PDOException $e){
    echo "Erro no Banco de dados".$e->getMessage();
}catch(Exception $e){
    "Erro generico";
}

?>
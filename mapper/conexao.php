<?php
try{
    $host = "127.0.0.1";
    $db = "visualfest";
    $user = "root";
    $pass = "";
$conexao = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
}catch(PDOException $e){
    echo "Erro ao conectar com o banco";
    die();
}
?>
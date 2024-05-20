<?php
    $local = "localhost";
    $user "root";
    $pass = "";
    $bd = "crud";

    $mysqli = mysqli_connect($local,$user,$pass,$bd); 
    
    if ($mysqli->connect_error) {
        die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
    }
?>
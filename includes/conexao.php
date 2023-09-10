<?php
    $hostname = 'localhost';
    $bancodedados = 'hamburgolandia';
    $usuario = 'root';
    $senha = '';

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_error){
        die("Erro ao conectar: ".$mysqli->connect_error);
    }
?>
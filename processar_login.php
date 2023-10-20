<?php

    include 'includes/conexao.php';

    $login_err = 0;

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] )){
        session_destroy();
        header('Location: index.php');
        exit;
    } else {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $user = $_POST['user'];
            $email = $_POST['email'];
            $filial = $_POST['filial'];

            $sql = "SELECT * FROM usuarios WHERE user = '$user' AND email = '$email' AND filial = '$filial' LIMIT 1";
            $sql_exec = $mysqli->query($sql) or die($mysqli->error);

            $usuario = $sql_exec->fetch_assoc();
            if(password_verify($_POST['senha'], $usuario['senha'])){
                session_start();
                $_SESSION['usuario_logado'] = $user;

                sleep(1);
                header('Location: index.php');
            } else {
                sleep(1);
                header('Location: login.php');
            }
        }

    }
?>
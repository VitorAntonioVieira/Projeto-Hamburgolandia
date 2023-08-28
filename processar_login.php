<?php
    $user1 = ['wesleydaVA', 'fiorezinsantista@hotmail.com', 'cacapava', 'euamoomestreyoda123'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $usuario = [$_POST['user'], $_POST['email'], $_POST['filial'], $_POST['senha']];

        if($usuario[0]==$user1[0] && $usuario[1]==$user1[1] && $usuario[2]==$user1[2] && $usuario[3]==$user1[3]){
            session_start();
            $_SESSION['usuario_logado'] = $usuario[0];

            sleep(1);
            header('Location: paginaInicial.php');
        } else {
            sleep(1);
            header('Location: index.php');
        }
    }
?>
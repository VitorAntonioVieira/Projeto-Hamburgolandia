<?php
if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] )){
    session_destroy();
    header('Location: index.php');
    exit;
} else {
    $user1 = ['wesleydaVA', 'fiorezinsantista@hotmail.com', 'cacapava', 'euamoomestreyoda123'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $usuario = [$_POST['user'], $_POST['email'], $_POST['filial'], $_POST['senha']];

        if($usuario[0]==$user1[0] && $usuario[1]==$user1[1] && $usuario[2]==$user1[2] && $usuario[3]==$user1[3]){
            session_start();
            $_SESSION['usuario_logado'] = true;

            sleep(1);
            header('Location: paginaInicial.php');
        } else {
            sleep(1);
            header('Location: index.php');
            echo '<script>alertaErro()</script>';
        }
    }
}
?>
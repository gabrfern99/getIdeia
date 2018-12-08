<?php
session_start();


function isLogado(){
    return isset($_SESSION['usuario_logado']);
}
    function verificarUsuario()
{
    if (!isLogado()) {
        $_SESSION['danger'] = "Você não tem permissão para utilizar essa função.";
        header("location:../login.php");
        die();
    }
}
    function usuarioLogado(){
        return $_SESSION['usuario_logado'];
    }
    function logaUsuario($email){
        $_SESSION['usuario_logado'] = $email;
        header("location:../painel.php");  
    }
    function logoutUsuario(){
    session_destroy();
    session_start();
    $_SESSION['success'] = "Você está deslogado";
    header("location:../index.php");
    }

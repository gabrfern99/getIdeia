<?php
 include 'CRUD_Usuario.php';
 include 'fnLoginLogout.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta=read_usuario_email($email);
if ($consulta==null) {
	header("location:../login.php?error=Usuario Não existe");
}elseif ($senha!=$consulta['senha']) {
	header("location:../login.php?error=Senha Incorreta");
}else{
	logaUsuario($email);
	echo "logado";
	header("location:../painel.php");
}
die();
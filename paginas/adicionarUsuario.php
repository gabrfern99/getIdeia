<?php 
include'CRUD_Usuario.php';
include 'errors.php';
    //Verificando se os campos existem 
    if (array_key_exists('nome', $_POST)) {
        $nome = $_POST['nome'];
    }
    if (array_key_exists('email', $_POST)) {
        $email = $_POST['email'];
    }
     if (array_key_exists('senha', $_POST)) {
        $senha = $_POST['senha'];
    }
    if (array_key_exists('confirmeSenha', $_POST)) {
        $confirmSenha = $_POST['confirmeSenha'];
    }
    $avaPessoal = 0;
    $foto = "";

    //Valindando senhas
   if (($senha=="")||($senha==' ')) {
       header("Location: ../cadastrar.php?error={$error[0]}");
   }elseif ($senha != $confirmSenha) {
        header("Location: ../cadastrar.php?error={$error[8]}");
    }elseif (mb_strlen($senha)<5) {
      header("Location: ../cadastrar.php?error={$error[6]}");
    }
    //Validando Nome
    if (($nome=="")||($nome==' ')) {
       header("Location: ../cadastrar.php?error={$error[0]}"); 
    }elseif(mb_strlen($nome)<=2){
        echo "Preencha o nome com no mínimo 2 caracteres.";
        header("Location: ../cadastrar.php?error={$error[4]}");
    }
    //Validando Email
    if ( !isset( $email )|| !(filter_var( $email, FILTER_VALIDATE_EMAIL ))) {
      echo $email;
      header("Location: ../cadastrar.php?error={$error[3]}");
    }
    //Validando termos de compromisso
    if (array_key_exists('termo', $_POST)) {
        $termo = $_POST['termo'];
    }else{
         header("Location: ../cadastrar.php?error={$error[9]}");
    }
    create_usuario($email,$senha,$nome,$avaPessoal,$foto);

?>

<h2 style="color: green;text-align: center;">Cadastrado. Agora faça login quando puder</h2>
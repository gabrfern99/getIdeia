<?php 

include("CRUD_Usuario.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmSenha = $_POST['confirmeSenha'];
$termo = $_POST['termo'];
$avaPessoal = 0;
$foto = "";

  $error = array(
    "Campo deve ser preenchido.",
    "Somente 20 caracteres são permitidos.",
    "Somente letras e espaços são permitidas.",
    "Formato de e-mail inválido.",
    "Mínimo de 3 caracteres.",
    "Somente 30 caracteres são permitidos.",
    "Mínimo de 5 caracteres.",
    "Somente letras e números são permitidos.",
    "Senhas precisam ser idênticas.",
    "Assine o termo"
);


     if ($senha != $confirmSenha) {
        header("Location: ../cadastrar.php?error={$error[8]}");
    }
   
       

    /*
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
     echo 'Email correto';
    }
    else {
         header("Location: ../cadastrar.php?error='{$error[3]}'");
    }
   
    if(strlen($nome)<=2){
    echo "Preencha o nome com no mínimo 2 caracteres.";
     header("Location: ../cadastrar.php?'{$error[4]}");
    }else{
    echo "Seu nome \"$nome\" tem ".strlen($nome)." caracteres.";
    }

    if($senha === ""){
        echo $error[0];
        header("Location: ../cadastrar.php?'{$error[0]}");
    } else if(strlen($senha) > 20){
        echo $error[1]; 
         header("Location: ../cadastrar.php?'{$error[1]}");
    } else if(strlen($senha) < 5){
        echo $error[6]; 
        header("Location: ../cadastrar.php?'{$error[6]}");
    } else if(!preg_match("^[a-zA-Z0-9]*$", $senha)){
        echo $error[7]; 
    header("Location: ../cadastrar.php?'{$error[7]}");

    }
     
    if($confirmSenha === ""){
        echo $error[0]; 
    } else if(strlen($confirmSenha) > 20){
        echo $error[1]; 
    } else if(strlen($confirmSenha) < 5){
        echo $error[6]; 
    } else if(!preg_match("^[a-zA-Z0-9]*$", $confirmSenha)){
        echo $error[7]; 
    } else if(!$confirmSenha == $senha){
        echo $error[8];
    header("Location: ../cadastrar.php?'{$error[8]}");

    }
    
    if ($senha == $confirmSenha) {
        echo 'Senha correta';
    }
    else {
        header("Location: ../cadastrar.php?'{$error[8]}");
}


    if($termo != 1){   
        echo 'Assine o termo de compromisso';
    }
    else{
        header("Location: ../cadastrar.php?'{$error[9]}");
    }*/
create_usuario($email,$senha,$nome,$avaPessoal,$foto);
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="paginas/design/css/login.css">
</head>
<body>
  <?php
    include 'paginas/fnLoginLogout.php';
    if (isLogado()) {
      header("location:painel.php");
    }
    $msg='';
    if (array_key_exists('error', $_GET)) {
      $msg="<div style='color:red;'>".$_GET['error']."</div>";
    }
  ?>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <a href="index.php"><img src="Paginas/design/imagens/logo.png" width="100" class="loginImg"></a>
    <div class="content">      
      <div id="login">

        <form method="post" action="paginas/fazerlogin.php"> 
          <h1>Login</h1>
          <br><?=$msg?><br> 

            <label for="nome_login">Seu Email</label>
            <input id="email" name="email" required="required" type="text" placeholder="ex. natalia@gmail.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="cadastrar.php#form">Cadastre-se</a>
          </p>
        </form>
      </div>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>
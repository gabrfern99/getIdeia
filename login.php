<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="paginas/design/css/login.css">
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <a href="index.php"><img src="Paginas/design/imagens/logo.png" width="100" class="loginImg"></a>
    <div class="content">      
      <div id="login">
        <form method="post" action="#"> 
          <h1>Login</h1> 
          <p> 

            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. natalia@gmail.com"/>
          </p>
           
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="senha" /> 
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
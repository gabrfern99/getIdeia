<html>
  <head>
    <title>getIdea</title>
	<link rel="shortcut icon" href="paginas/design/imagens/favicon.png" type="image/x-png" /> 
	<link rel="stylesheet" href="paginas/design/css/menu.css">
	<link rel="stylesheet" href="paginas/design/css/divisao.css">
	<link rel="stylesheet" href="paginas/design/css/form.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
  	<?php
  		if (array_key_exists('tipo_pesquisa', $_GET)) {
  			$tipo_pesquisa = $_GET['tipo_pesquisa'];
  		}else{
  			$tipo_pesquisa = 'todos';
  		}
  	?>
  	<div>
   		<div class="barra" >
   			<!--
   			<span class="barraCL">
   				<a href="cadastrar.php#form">Cadastrar</a>
   			</span> &nbsp&nbsp      
   			
   			<span class="barraCL">
   				<a href="login.php">Login</a>
   			</span>
   			-->
   			
   			<span class="barraCL">
   				<a href="painel.php">Olá Fulano</a>
   			</span> &nbsp&nbsp      
   			
   			<span class="barraCL">
   				<a href="#">sair</a>
   			</span>
   		</div>
   	<section class="cor1">
        <div class="content" align="center">
			
			<h1 class="frase">Projeto de gerenciamento de loja.</h1>
		
			<br><br>
			<div class="grupo" >
			<form >
			  <input class="form" type="text" id="pesquisa" placeholder="Buscar..."/>
			  <select>
				  <option value="Todos">Todos</option>
				  <option value="programação">Programação</option>
				  <option value="design">Desing</option>
			  </select>
			  <button type="submit" name="submit" class="botao">Procurar</button>
			 </form>
			</div>
			
			
		</div>
	</section>
	<?php include("paginas/rodape.php"); ?>

		<script>
			//Efeito de
			  function typeWriter(elemento) {
				const textoArray = elemento.innerHTML.split('');
				elemento.innerHTML = '';
				textoArray.forEach((letra, i) => {
				  setTimeout(() => elemento.innerHTML += letra, 75 * i);
				});
			  }
			  const titulo = document.querySelector('.frase');
			  typeWriter(titulo);

			</script>
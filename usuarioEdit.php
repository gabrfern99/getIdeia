<?php 
include 'paginas/cabecalhoDeLogin.php';
 ?>
 <br><br><br>

 	<div class="container">
 		<div style="background-color: #ccc;box-shadow: 8px 8px 8px gray; padding: 30px;">
	 		<form action="#" method="post" id="form" class="form-horizontal">
								
							
							<div class="form-group">
								<label for="nome">Nome</label>
								<input class="form-control" type="email" id="nome" name="nome" value="">
							</div>
							<div class="form-group">
								<label for="nome">Email</label>
								<input class="form-control" type="text" id="email" name="email"  value="">
							</div>
							<div class="form-group">
								<label for="senha">Senha</label>
								<input class="form-control" type="password" id="senha" name="senha"  value="">
							</div>

							<div class="form-group">
								<label for="confirmeSenha">Senha confirmar</label>
								<input class="form-control" type="password" id="confirmeSenha" name="confirmeSenha"" value="">
							</div>
						<button type="submit" class="btn btn-default">Editar</button>	
			</form>
 		</div>
 	</div>
 	

		<br>
		<br>
		<br>
		<br>
		


 <?php
include 'paginas/rodape.php'
?>
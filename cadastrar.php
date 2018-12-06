<?php 
	include("Paginas/cabecalho.php");
 ?>
	
	<section class="cor3">
        <div class="content">
			<form action="#" method="post" id="form">
				<fieldset>
					
						
						<div class="campo">
							<label for="nome">Nome</label>
							<input class="form" type="text" id="nome" name="nome" value="">
						</div>
						<div class="campo">
							<label for="nome">Email</label>
							<input class="form" type="text" id="email" name="email"  value="">
						</div>
						<div class="campo">
							<label for="senha">Senha</label>
							<input class="form" type="text" id="senha" name="senha"  value="">
						</div>

						<div class="campo">
							<label for="confirmeSenha">Senha confirmar</label>
							<input class="form" type="text" id="confirmeSenha" name="confirmeSenha"" value="">
						</div>
						
						<label>Termo: </label>
						<label>
							<input type="checkbox" name="termo" value="1"> Li e aceito os termos de uso
						</label>
					
					
					<button type="submit" class="botao">Enviar</button>
				</fieldset>
			</form>
		</div>
    </section>
	
<?php include("paginas/rodape.php"); ?>
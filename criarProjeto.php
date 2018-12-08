<?php 
 include 'paginas/cabecalhoDeLogin.php';
?>
<br><br>
	<div class="row">
		<h2 class="col-md-2 col-md-offset-5">Criar Projetos</h2>
	</div>

	<div class="container">
		<div class="row"> 
			<div style="background-color: #ccc;box-shadow: 8px 8px 8px gray; padding: 30px;">
				<form method="post" action="paginas/adicionarProjeto.php">
					<div class="form-group">
						<input type="text" name="descricao" placeholder="Descrição" class="form-control"/>
					</div>
					<div class="form-group">
						<input type="number" name="preco" placeholder="Preço" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Categoria</label>
						<select class="form-control" name="categoria">
							  <option value="programacao">Programação</option>
							  <option value="design">Desing</option>
							  <option value="outros">Outros</option>
			 		 	</select>
					</div>
					<div class="form-group">
						<input type="text" name="previa" placeholder="Link De acesso da Previa" class="form-control"/>
					</div>
					<div class="form-group">
					  <label for="comment">Breve descrição sobre o Projeto</label>
					  <textarea class="form-control" rows="5" id="comment" name="sobre"></textarea>
					</div>
					<button class="btn btn-default">Criar</button>
				</form>
			</div>

		</div>
	</div>	
	<br><br><br>
<?php include 'paginas/rodape.php'?>
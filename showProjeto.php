<?php
include 'paginas/cabecalho.php';
include 'paginas/CRUD_Projeto.php';

if (array_key_exists('id', $_GET)) {
	//buscando projeto no banco
	$projeto= read_projeto($_GET['id']);
	//buscando criador do projeto
	$criador =read_usuario_id($projeto['id_usuarios']);
}	
?>
	<div class="cor5">

		<div>
			<img src="paginas/design/imagens/iconP.png"/ width="200" style="float: left;margin-right:5%;">
			<h3>Descrição: <?=$projeto['descricao']?></h3>
			<br>
			<h5>Sobre: <?=$projeto['sobre']?></h5>
		</div>
		<div>
			<br>
			<br>
			<br>
			<br>
			<h5>Autor: <?=$criador['nome']?></h5>
			<h5>Classificação *****</h5>
			<h5>Categoria: <?=$projeto['categoria']?></h5>
			<div class="direitaShow">
				<a href="<?=$projeto['previa']?>" class="linkprevia">Ver Prévia</a>
				<br>
				<br>
				<h5>Preço: R$ <?=$projeto['preco']?></h5>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
<?php
include 'paginas/rodape.php';
?>
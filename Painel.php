<?php 
include 'paginas/cabecalhoDeLogin.php';
 ?>
    <!--Parte do corpo. Card dos projetos-->
    <div class="row">
	    		<h2 class="col-md-3 col-md-offset-5 ">Meus Projetos</h2>
	    		<br>
	    		<a href="criarProjeto.php" class="btn col-md-offset-2  col-md-1" style="background:#F90;color: white;">Criar Projeto <i class="glyphicon glyphicon-plus"></i></a>
	    		
	</div>

	<div class="row">
	    <div class="container">
	    	
	    	<?php

	    	$projetos = projetos_do_usuario($consulta['id']);
	    	
			
			while ($projeto = mysqli_fetch_assoc($projetos)):	
	    	?>
		    	<div class="row cardProject">
		    		<h4 class="col-md-3 ">Projeto: <?=substr($projeto['sobre'], 0,15)."...";?></h4>
		    		<h5 class="col-md-5 col-md-offset-1">Sobre: <?=substr($projeto['sobre'], 0,40)."...";?>
		    		</h5>
		    		<h4 class="col-md-2 col-md-offset-1">Preço: R$ <?=$projeto['preco'];?></h4>
		    		<h4 class="col-md-3"> Categoria: <?=$projeto['categoria']?></h4>
		    		<h5 class="col-md-3 col-md-offset-1">Classif. <i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star-empty"></i></h5>
		    		<a href="showProjeto.php?id=<?=$projeto['id'];?>" class="btn col-md-offset-3  col-md-2" style="background:#F90;color: white;">VER</i></a>
		    	</div>
		    <?php endwhile?>	
	    </div>
	</div>


	
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
		include 'paginas/rodape.php';
	?>	
	

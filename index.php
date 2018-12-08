<?php 
	include("paginas/cabecalho.php");
 ?>

	<section class="img1">
        <div class="content">
           <font face="Century Gothic" color="white" size="10"> Você é programador e quer vender seus projetos?</font>
            <p><font face="Century Gothic" color="white" size="6,5">Aqui você pode! É só cadastrar seu projeto no site!</font></p>
			<br>
			<div class="i2Style" href="javascript:void(cadastrar.php' "onClick=" window.location='cadastrar.php'">Cadastrar</div>
        </div>
    </section>
	
	<section class="cor2">
        <div class="content">
           <font face="Century Gothic" color="#373737" size="10"> Você deseja comprar projetos?</font>
            <p><font face="Century Gothic" color="white" size="6,5">Escolha a categoria que deseja.</font></p>
			<br>
			<center>
			<table> <tr> <td><div class="bt1" href="javascript:void('pesquisa.php?tipo_pesquisa=programacao' "onClick=" window.location='pesquisa.php?tipo_pesquisa=programacao'">Programador</div></td>
			<td></<td><td></<td><td></<td><td></<td><td></<td><td></<td><td></<td><td></<td><td></<td><td></<td><td></<td>
			<td><div class="bt2" href="javascript:void('pesquisa.php?tipo_pesquisa=design' "onClick=" window.location='pesquisa.php?tipo_pesquisa=design'"><center>Design</center></div></<td></tr></table>
			</center>
		</div>
    </section>
	
	<?php include("paginas/rodape.php"); ?>
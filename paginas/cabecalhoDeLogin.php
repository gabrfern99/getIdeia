<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Painel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="paginas/design/css/divisao.css">
	<style type="text/css">
		
		.img{
			float: left;
			margin-right: 5px;
			margin-top: 5px;
		}
		.navbar-nav{
			float: right;
		}
		.dropdown-item{
			display: block;
			margin: 2px;
			padding: 10px;
			font-size: 20px;
		}
		.dropdown-item:hover{
			background-color: #ccc;
			text-decoration: none;

		}
		.cardProject{
			box-shadow: 8px 8px 8px #ccc;
			padding: 10px;
		}
	</style>

</head>
<body>
	    <!--Cabeçalho da página de Painel e Editar user-->

	<div class="navbar navbar-inverse navbar-fixed-top row">
       
        <div class="container">
         <img src="paginas/design/imagens/logoBranca.png" width="40" class="img">
		   <div class="navbar-header">
                <a href="index.php" class="navbar-brand"> getIDEIA</a>
            </div>
                <ul class="nav navbar-nav mr-auto direita" >
                    <li><a href="usuarioEdit.php">Minha Conta</a></li>
                     <li>
                     	<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Fulano <i class="glyphicon glyphicon-triangle-bottom"></i>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Fulano</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-log-out"></i>Sair</a>
					        </div>
					      </li>
                     </li>
                    
                </ul>
        </div><!-- container acaba aqui -->
        
    </div>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
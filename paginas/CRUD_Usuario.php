<?php
require_once ('conexaoBD.php');

 function create_usuario($email,$senha,$nome,$avaPessoal,$foto)
{
	//Trantando valores das variáveis para não corromper o banco com caracteres especiais
	$conexao = mysqli_connect("localhost","root","","getIdeia");
	$email = mysqli_real_escape_string($conexao,$email);
	$senha = mysqli_real_escape_string($conexao,$senha);
	$nome = mysqli_real_escape_string($conexao,$nome);
	$avaPessoal = mysqli_real_escape_string($conexao,$avaPessoal);
	$foto = mysqli_real_escape_string($conexao,$foto);

	$sql = "insert into usuarios(email,senha,nome,avaPessoal,foto)
	 values('{$email}','{$senha}','{$nome}','{$avaPessoal}','{$foto}')";
	$resultadoDaInsercao = mysqli_query($conexao, $sql);
    return $resultadoDaInsercao;
}
 function read_usuario_id($id){
		$conexao = mysqli_connect("localhost","root","","getIdeia");
		$sql = "select * from usuarios where id = {$id}";
        $consult = mysqli_query($conexao, $sql);
        $result =  mysqli_fetch_assoc($consult);
        return $result;
}
 function read_usuario_email($email){
	$conexao = mysqli_connect("localhost","root","","getIdeia");
	$sql = "select * from usuarios where id = {$email}";
    $consult = mysqli_query($conexao, $sql);
    $result =  mysqli_fetch_assoc($consult);
    return $result;
}

 function update_usuario($email,$senha,$nome,$avaPessoal,$foto)
{
	//Trantando valores das variáveis para não corromper o banco com caracteres especiais
	$conexao = mysqli_connect("localhost","root","","getIdeia");
	$email = mysqli_real_escape_string($conexao,$email);
	$senha = mysqli_real_escape_string($conexao,$senha);
	$nome = mysqli_real_escape_string($conexao,$nome);
	$avaPessoal = mysqli_real_escape_string($conexao,$avaPessoal);
	$foto = mysqli_real_escape_string($conexao,$foto);

	$sql = "update usuarios set email ='{$email}',senha='{$senha}',nome='{$nome}',avaPessoal='{$avaPessoal}',foto='{$foto}'";
	$resultadoDaInsercao = mysqli_query($conexao, $sql);
    return $resultadoDaInsercao;
}
/*
create table usuarios(
	id int primary key auto_increment,
	email VARCHAR(50) NOT NULL,
	senha VARCHAR(50) NOT NULL,
	nome VARCHAR(50) NOT NULL,
	avaPessoal int DEFAULT 0, 
	foto VARCHAR(250)
	)*/
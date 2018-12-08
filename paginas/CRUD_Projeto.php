<?php
include 'conexao.php';

public function create_projeto($id_usuario,$img,$classificacao,$descricao,$sobre,$preco,$categoria,$previa){
	//Tratando valores de variáveis para não ter caracter que corrompa o BD
	$img = mysqli_real_escape_string($conexao,$img);
	$descricao = mysqli_real_escape_string($conexao,$descricao);
	$sobre = mysqli_real_escape_string($conexao,$sobre);
	$preco = mysqli_real_escape_string($conexao,$preco);
	$categoria = mysqli_real_escape_string($conexao,$categoria);
	$previa = mysqli_real_escape_string($conexao,$previa);
	$classificacao = 0;
	$sql = "insert into projetos(id_usuario,img,classificacao,descricao,sobre,preco,categoria,previa) values ('{$id_usuario}','{$img}','{$classificacao}','{$descricao}','{$sobre}','{$preco}','{$categoria}','{$previa}')";
	$resultadoDaInsercao = mysqli_query($conexao, $sql);
    return $resultadoDaInsercao;
}

public function read_projeto($id){
	$sql = "select * from projetos where id = {$id}";
    $consult = mysqli_query($conexao, $sql);
    $result =  mysqli_fetch_assoc($consult);
    return $result;

}
public function todos_projetos(){
	$sql = "select * from projetos";
    $consult = mysqli_query($conexao, $sql);

}

function remover_projeto($id){
    $query = "delete from  projetos where id = {$id}";
    return mysqli_query($this->conexao,$query);
    }
/*id int primary key auto_increment, 
	id_usuarios int,
	img VARCHAR(250),
	classificacao int,
	relevancia DECIMAL(7,2) DEFAULT 0, 
	descricao VARCHAR (50)NOT NULL,
	sobre TEXT, 
	preco DECIMAL(7,2)NOT NULL,
	categoria VARCHAR (50)NOT NULL,
        previa VARCHAR(100) NOT NULL
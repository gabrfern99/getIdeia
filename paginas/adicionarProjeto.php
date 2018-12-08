 <?php 
include ("CRUD_Projeto.php");
$id_usuario = $_POST['id_usuarios'];
$img = '';
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$sobre = $_POST ['sobre'];
$categoria = $_POST['categoria'];
$previa = $_POST['previa'];
$classificacao = 0;
create_projeto($id_usuario,$img,$classificacao,$descricao,$sobre,$preco,$categoria,$previa);
 header("location:../painel.php");
?>
<p class="alert-success"> Produto adicionado com sucesso. </p>
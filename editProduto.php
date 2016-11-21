<?php
//conexao com banco
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nome=$_POST['nome'];
	$descricao=$_POST['descricao'];
	$preco=$_POST['preco'];	
	
	// validacao campos vazios
	if(empty($nome) || empty($descricao) || empty($preco)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Campo nome obrigatório!.</font><br/>";
		}
		
		if(empty($descricao)) {
			echo "<font color='red'>Campo descrição obrigatório!.</font><br/>";
		}
		
		if(empty($preco)) {
			echo "<font color='red'>Campo preço obrigatório!.</font><br/>";
		}		
	} else {	
		//atualizar tabela
		$result = mysqli_query($mysqli, "UPDATE predutos SET nome='$nome',descricao='$descricao',preco='$preco' WHERE id=$id");
		
		//redirecionar para index.php
		header("Location: index.php");
	}
}
?>
<?php
//pegar id da url
$id = $_GET['id'];

//selecionar data associada com o id
$result = mysqli_query($mysqli, "SELECT * FROM produtos WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nome = $res['nome'];
	$descricao = $res['descricao'];
	$preco = $res['preco'];
}
?>
<html>
<head>	
	<title>Editar</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editProduto.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value=<?php echo $nome;?>></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input type="text" name="descricao" value=<?php echo $descricao;?>></td>
			</tr>
			<tr> 
				<td>Preço</td>
				<td><input type="text" name="preco" value=<?php echo $preco;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Atualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

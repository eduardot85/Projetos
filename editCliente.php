<?php
//conexao com banco
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$telefone=$_POST['telefone'];	
	
	// validacao campos vazios
	if(empty($nome) || empty($email) || empty($telefone)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Campo nome obrigatório!.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Campo email obrigatório!.</font><br/>";
		}
		
		if(empty($telefone)) {
			echo "<font color='red'>Campo telefone obrigatório!.</font><br/>";
		}		
	} else {	
		//atualizar tabela
		$result = mysqli_query($mysqli, "UPDATE clientes SET nome='$nome',email='$email',telefone='$telefone' WHERE id=$id");
		
		//redirecionar para index.php
		header("Location: index.php");
	}
}
?>
<?php
//pegar id da url
$id = $_GET['id'];

//selecionar data associada com o id
$result = mysqli_query($mysqli, "SELECT * FROM clientes WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nome = $res['nome'];
	$email = $res['email'];
	$telefone = $res['telefone'];
}
?>
<html>
<head>	
	<title>Editar</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editCliente.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value=<?php echo $nome;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Telefone</td>
				<td><input type="text" name="telefone" value=<?php echo $telefone;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Atualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

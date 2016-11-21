<html>
<head>
	<title>Adicionar Cliente</title>
</head>

<body>
<?php
//incluir arquivo de conexao do banco
include_once("config.php");




if(isset($_POST['Submit'])) {	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
		
	// validacao
	if(empty($nome) || empty($email) || empty($telefone)) {
				
		if(empty($nome)) {
			echo "<font color='red'>Campo nome obrigatório.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Campo email obrigatório.</font><br/>";
		}
		
		if(empty($telefone)) {
			echo "<font color='red'>Campo telefone obrigatório.</font><br/>";
		}
		
		//link para pagina anterior
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// se todos os campos estao preenchidos 
			
		//inserir no banco
		$result = mysqli_query($mysqli, "INSERT INTO clientes(nome,email,telefone) VALUES('$nome','$email','$telefone')");
		
		//mensagem de sucesso
		echo "<font color='green'>Cliente adicionado.";
		echo "<br/><a href='index.php'>Ver Resultados</a>";
	}
}
?>
</body>
</html>

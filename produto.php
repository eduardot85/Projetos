<html>
<head>
	<title>Adicionar Produto</title>
</head>

<body>
<?php
//incluir arquivo de conexao do banco
include_once("config.php");




if(isset($_POST['Submit'])) {	
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
		
	// validacao
	if(empty($nome) || empty($descricao) || empty($preco)) {
				
		if(empty($nome)) {
			echo "<font color='red'>Campo nome obrigatório.</font><br/>";
		}
		
		if(empty($descricao)) {
			echo "<font color='red'>Campo descrição obrigatório.</font><br/>";
		}
		
		if(empty($preco)) {
			echo "<font color='red'>Campo preço obrigatório.</font><br/>";
		}
		
		//link para pagina anterior
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// se todos os campos estao preenchidos 
			
		//inserir no banco
		$result = mysqli_query($mysqli, "INSERT INTO produtos(nome,descricao,preco) VALUES('$nome','$descricao','$preco')");
		
		//mensagem de sucesso
		echo "<font color='green'>Produto adicionado.";
		echo "<br/><a href='index.php'>Ver Resultados</a>";
	}
}
?>
</body>
</html>

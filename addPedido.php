<html>
<head>
	<title>Adicionar Cliente</title>
</head>

<body>
<?php
//incluir arquivo de conexao do banco
include_once("config.php");


if(isset($_POST['Submit'])) {	
	$id_cliente = $_POST['id_cliente'];
	$id_produto = $_POST['id_produto'];
	$result = mysqli_query($mysqli, "INSERT INTO pedidos(id_cliente, id_produto) VALUES('$id_cliente','$id_produto')");
	echo "<font color='green'>Pedido adicionado.";
	echo "<br/><a href='index.php'>Ver Resultados</a>";
	}
	
?>
</body>
</html>
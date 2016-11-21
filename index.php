<?php
//incluir arquivo de conexao com o banco
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM clientes ORDER BY id DESC"); 
$result2 = mysqli_query($mysqli, "SELECT * FROM produtos ORDER BY id DESC"); 
$result3 = mysqli_query($mysqli, "SELECT pe.id_pedido, c.nome 'NomeCliente', pr.nome 'NomeProduto' FROM pedidos pe
INNER JOIN clientes c on c.id= pe.id_cliente
INNER JOIN produtos pr on pr.id= pe.id_produto
ORDER BY id_pedido DESC"); 
?>

<html>
<head>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<title>Home</title>
</head>

<body>
</br> 

<a class="btn btn-info" href="http://localhost/eduardo/?page_id=7">Home</a>

</br>
</br>
</br>

<a class="btn btn-primary" href="addCliente.html">Adicionar novo Cliente</a><br/><br/>

	<table class="table">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Telefone</th>
		<th>Atualizar</th>
	</tr>
		<tbody>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nome']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['telefone']."</td>";	
		echo "<td><a class='btn btn-warning' href=\"editCliente.php?id=$res[id]\">Editar</a> | <a class='btn btn-danger' href=\"deleteCliente.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que deseja excluir o cliente?')\">Apagar</a></td>";		
		echo "</tr>";
	}
	?>
		</tbody>
	</table></br></br></br>
	
	<a class="btn btn-primary" href="addProduto.html">Adicionar novo Produto</a><br/><br/>

	<table class="table">
	<tr>
		<th>Nome</th>
		<th>Descrição</th>
		<th>Preço</th>
		<th>Atualizar</th>
	</tr>
		<tbody>
	<?php 
	
	while($res = mysqli_fetch_array($result2)) { 		
		echo "<tr>";
		echo "<td>".$res['nome']."</td>";
		echo "<td>".$res['descricao']."</td>";
		echo "<td>".$res['preco']."</td>";	
		echo "<td><a class='btn btn-warning' href=\"editProduto.php?id=$res[id]\">Editar</a> | <a class='btn btn-danger' href=\"deleteProduto.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que deseja excluir o produto?')\">Apagar</a></td>";		
	}
	?>
		</tbody>
	</table></br></br></br>

	<a class="btn btn-primary" href="pedido.php">Adicionar novo Pedido</a><br/><br/>

	<table class="table">
	<tr>
		<th>Pedido</th>
		<th>Cliente</th>
		<th>Produto</th>
		<th><th>
	</tr>
		<tbody>
	<?php 
	
	while($res = mysqli_fetch_array($result3)) { 		
		echo "<tr>";
		echo "<td>".$res['id_pedido']."</td>";
		echo "<td>".$res['NomeCliente']."</td>";
		echo "<td>".$res['NomeProduto']."</td>";
		echo "<td><a class='btn btn-danger' href=\"deletePedido.php?id=$res[id_pedido]\" onClick=\"return confirm('Tem certeza que deseja excluir o pedido?')\">Apagar</a></td>";		
	}
	?>
		</tbody>
	</table>

</body>
</html>

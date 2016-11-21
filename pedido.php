<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<title>Novo Pedido</title>
</head>

<body></br>
	<a class="btn btn-info" href="http://localhost/eduardo/?page_id=7">Home</a>
	</br></br>
	<form action="addPedido.php" method="post" name="form1">
<?php
//incluir arquivo de conexao do banco
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM clientes ORDER BY id DESC"); 
$result2 = mysqli_query($mysqli, "SELECT * FROM produtos ORDER BY id DESC"); 

?>
<label for="id_cliente">Cliente</label>
<select class="form-control" id="id_cliente" name="id_cliente">

<?php

while($res = mysqli_fetch_array($result)) { 		
	echo "<option value='" . (string)$res['id'] . "'>" . $res['nome'] . "</option>";
		
	}
?>
</select></br></br>

<label for="id_produto">Produto</label>
<select class="form-control" name="id_produto">

<?php

while($res = mysqli_fetch_array($result2)) { 		
	echo "<option value='" . (string)$res['id'] . "'>" . $res['nome'] . "</option>";
		
	}
?>


</select></br></br>

	<input type="submit" class="btn btn-primary" name="Submit" value="Adicionar Pedido">

</form>

</body>
</html>

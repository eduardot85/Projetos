<?php
// conexao com banco
include("config.php");

//buscar id da url
$id = $_GET['id'];

//apagar da tabela
$result = mysqli_query($mysqli, "DELETE FROM pedidos WHERE id_pedido=$id");

//redirecionar para home
header("Location:index.php");
?>


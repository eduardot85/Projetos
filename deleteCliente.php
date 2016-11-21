<?php
// conexao com banco
include("config.php");

//buscar id da url
$id = $_GET['id'];

//apagar da tabela
$result = mysqli_query($mysqli, "DELETE FROM clientes WHERE id=$id");

//redirecionar para home
header("Location:index.php");
?>


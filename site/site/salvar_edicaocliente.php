<?php

include("conexao.php");
$nome      = $_POST["nome"];
$nascimento = $_POST["datanasc"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$endereco = $_POST["endereco"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$id        = $_POST["id"];

$sql = "UPDATE cliente SET nome = '$nome', data_nasc = '$nascimento', 
rg = '$rg', cpf = '$cpf', endereco = '$endereco', estado = '$estado', email = '$email',
telefone = '$telefone' WHERE cliente.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarcliente.php");
?>

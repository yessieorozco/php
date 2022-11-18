<?php

include("conexao.php");
$nome      = $_POST["nome"];
$data_validade= $_POST["data_val"];
$tipo = $_POST["tipo"];
$valor = $_POST["valor"];
$especie = $_POST["especie"];
$observacoes = $_POST["obs"];
$fornecedor= $_POST["fornecedor"];
$telefone = $_POST["telefone"];
$id        = $_POST["id"];

$sql = "UPDATE produto SET nome = '$nome', data_val = '$data_validade', 
tipo = '$tipo', valor = '$valor', especie = '$especie', obs = '$observacoes',
telefone = '$telefone' WHERE produto.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarproduto.php");
?>

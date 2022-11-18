<?php

include("conexao.php");
$nome      = $_POST["nome"];
$nascimento = $_POST["data_nasc"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$pai = $_POST["pai"];
$mae = $_POST["mae"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$id        = $_POST["id"];

$sql = "UPDATE funcionario SET nome = '$nome', data_nasc = '$nascimento', 
rg = '$rg', cpf = '$cpf', pai = '$pai', mae = '$mae', email = '$email',
telefone = '$telefone' WHERE funcionario.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarfunc.php");
?>

<?php
include("conexao.php");
$id = $_GET["id"];
$mysqli = new mysqli("localhost","root","","dados");

$mysqli -> query("SELECT * FROM produto");
echo "Total de registros encontrados: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM produto WHERE id = $id");
echo "<br> Total de registros excluídos: " . $mysqli -> affected_rows;

$mysqli -> close();
?>
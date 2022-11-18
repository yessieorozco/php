<?php
include("conexao.php");

$sql = "select * from produto";
$query = mysqli_query($conn, $sql);

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Produtos</title>
</head>

<body>


<h1><center> Produtos </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>DATA_VALIDADE</th>
    <th>TIPO</th>
    <th>VALOR</th>
    <th>ESPECIE</th>
    <th>FORNECEDOR</th>
    <th>OBSERVAÇÕES</th>
    <th>TELEFONE</th>

    <th>EDITAR/EXCLUIR</th>
</tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
	$id        = $L["id"];
	$nome      = $L["nome"];
	$data_val      = $L["data_val"];
	$tipo     = $L["tipo"];
	$valor     = $L["valor"];
	$especie     = $L["especie"];
	$fornecedor     = $L["fornecedor"];
	$obs     = $L["obs"];
	$telefone     = $L["telefone"];
	
    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$data_val</td>
    <td>$tipo</td>
    <td>$valor</td>
    <td>$especie</td>
    <td>$fornecedor</td>
    <td>$obs</td>
    <td>$telefone</td>
    <td><a href=\"editar.php?id=$id\">[Editar]</a> | 
	<a href=\"excluirproduto.php?id=$id\">[Excluir]</a></td>
  </tr>
  </tbody>\n";
}  
?>  
</table>
</body>
</html>

<?php
include("conexao.php");

$sql = "select * from cliente";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Clientes</title>
</head>

<body>
<?php
if(mysqli_fetch_array($query) < 1) {
	$mysqli->close();
}
?>

<h1><center> Clientes </center></h1>
<table width="500" border="1" align="center">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>NASCIMENTO</th>
    <th>RG</th>
    <th>CPF</th>
    <th>ENDEREÇO</th>
    <th>ESTADO</th>
    <th>E-MAIL</th>
    <th>TELEFONE</th>

    <th>EDITAR/EXCLUIR</th>
  </tr>
<?php
while($L = mysqli_fetch_array($query)) {
	$id        = $L["id"];
	$nome      = $L["nome"];
	$data_nasc = $L["data_nasc"];
	$rg     = $L["rg"];
  $cpf     = $L["cpf"];
  $endereco     = $L["endereco"];
  $estado     = $L["estado"];
  $email     = $L["email"];
  $telefone     = $L["telefone"];
	
	echo"
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$data_nasc</td>
    <td>$rg</td>
    <td>$cpf</td>
    <td>$endereco</td>
    <td>$estado</td>
    <td>$email</td>
    <td>$telefone</td>
    <td><a href=\"editarcliente.php?id=$id\">[Editar]</a> | 
	<a href=\"excluircliente.php?id=$id\">[Excluir]</a></td>
  </tr>\n";
}  
?>  
</table>
</body>
</html>

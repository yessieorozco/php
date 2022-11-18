<?php
include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "select * from produto where id = $id";
$query = mysqli_query($conn, $sql);
$dados  = mysqli_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Atualizar Cliente</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_edicaoproduto.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2 align="center"><strong>Edição de Cadastro de produto </strong></h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Nome</td>
      <td width="209"><input name="nome" type="text" id="nome" value="<?php echo $dados["nome"];?>" /></td>
    </tr>
    <tr>
      <td>data_validade</td>
      <td><input name="data_val" type="text" id="data_val" value="<?php echo $dados["data_val"];?>" /></td>
    </tr>
    <tr>
      <td>tipo</td>
      <td><input name="tipo" type="text" id="tipo" value="<?php echo $dados["tipo"];?>" /></td>
    </tr>
	<tr>
      <td>valor</td>
      <td><input name="valor" type="text" id="valor" value="<?php echo $dados["valor"];?>" /></td>
    </tr>
    <tr>
      <td>especie</td>
      <td><input name="especie" type="text" id="especie" value="<?php echo $dados["especie"];?>" /></td>
    </tr>
	<tr>
      <td>observacoes</td>
      <td><input name="obs" type="text" id="obs" value="<?php echo $dados["obs"];?>" /></td>
    </tr>
	<tr>
      <td>fornecedor</td>
      <td><input name ="fornecedor" type="text" id="fornecedor" value="<?php echo $dados["fornecedor"];?>" /></td>
    </tr>
	<tr>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone" value="<?php echo $dados["telefone"];?>" /></td>
    </tr>
    <tr>
	  <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravar" style="cursor:pointer"/></td>
    </tr>
  </table>
</form>
</body>
</html>

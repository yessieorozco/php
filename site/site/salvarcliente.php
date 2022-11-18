<?php
    include("conexao.php");
   
	$nome = $_POST["nome"];
	$data_nasc = $_POST["data_nasc"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$endereco = $_POST["endereco"];
	$estado = $_POST["estado"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	$result_cli = "INSERT INTO cliente(nome, data_nasc, rg, cpf, endereco, estado, email, telefone) 
					VALUES ('$nome', '$data_nasc', '$rg', '$cpf', '$endereco', '$estado', '$email', '$telefone')";
    $resultado_cli = mysqli_query($conn, $result_cli);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "Cliente cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
                    
                  
            }
			
?>
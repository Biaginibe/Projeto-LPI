<?php

	include_once 'conexao.php';
	
	$id = $_POST['codigo'];
	$emp = $_POST['cxemp'];
    $end = $_POST['cxend'];
    $contato = $_POST['cxcontato'];
    $cnpj = $_POST['cxcnpj'];
	
	$alterar = "UPDATE tbcliente SET 
	empresa = '$emp',
	endereco = '$end',
    contato = '$contato',
    cnpj = '$cnpj'

	where cod = '$id'";

	$executar = mysqli_query($conn,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarClientes.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>
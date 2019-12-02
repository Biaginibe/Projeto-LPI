<?php

	include_once 'conexao.php';
	
	$id = $_POST['codigo'];
	$nome = $_POST['cxnome'];
    $endereco = $_POST['cxend'];
    $telefone = $_POST['cxtel'];
	
	$alterar = "UPDATE tbtecnico SET 
	nome = '$nome',
	endereco = '$endereco',
    telefone = '$telefone'

	where cod = '$id'";

	$executar = mysqli_query($conn,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarTecnicos.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>
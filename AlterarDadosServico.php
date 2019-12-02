<?php

	include_once 'conexao.php';
	
	$id = $_POST['codigo'];
	$codtec = $_POST['cxcodtec'];
    $codcli = $_POST['cxcodcli'];
    $desc = $_POST['cxdescricao'];
	
	$alterar = "UPDATE tbservico SET 
	codtecnico = '$codtec',
	codcliente = '$codcli',
    descricao = '$desc'

	where cod = '$id'";

	$executar = mysqli_query($conn,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarServicos.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>
<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbtecnico where cod='$id' ";
	$executar = mysqli_query($conn,$excluir);
	if($executar)
	{
		echo "Tecnico excluido com sucesso";
		echo "<br>";
		echo "<a href='listarTecnicos.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
?>
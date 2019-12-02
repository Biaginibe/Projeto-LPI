<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbservico where cod='$id' ";
	$executar = mysqli_query($conn,$excluir);
	if($executar)
	{
		echo "Serviço excluido com sucesso";
		echo "<br>";
		echo "<a href='listarServicos.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
?>
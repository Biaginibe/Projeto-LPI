<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundored.css" />
    </head>
<body>
<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbtecnico where cod='$id' ";
	$executar = mysqli_query($conn,$excluir);
	if($executar)
	{
		echo "<img style='position: absolute; left: 30%; top: 30%'src='img/dadosexcluidos.png'/>";
		echo "<br>";
		echo "<a class='voltar' href='listarTecnicos.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
?>
</body>
</html>
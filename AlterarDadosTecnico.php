<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoyellow.css" />
    </head>
<body>

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
		echo "<img style='position: absolute; left: 33%; top: 10%;'src='img/batatadadosalterados.png'/>";
		echo "<br/><a class='voltar' href='listarTecnicos.php'>Voltar</a><br/>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>
</body>
</html>
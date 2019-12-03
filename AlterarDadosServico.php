<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoyellow.css" />
    </head>
<body>
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
		echo "<img style='position: absolute; left: 33%; top: 10%;'src='img/batatadadosalterados.png'/>";
		echo "<br/><a class='voltar' href='listarServicos.php'>Voltar</a><br/>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>
</body>
</html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoyellow.css" />
    </head>
<body>

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
		echo "<img style='position: absolute; left: 33%; top: 10%;'src='img/batatadadosalterados.png'/>";
		echo "<br/><a class='voltar' href='listarClientes.php'>Voltar</a><br/>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>
</body>
<html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoverde.css" />
    </head>
<body>

<?php
SESSION_START();
include_once 'conexao.php';

$empresa=$_POST['cxempresa'];
$endereco=$_POST['cxend'];
$contato=$_POST['cxcontato'];
$cnpj=$_POST['cxcnpj'];

$sql = "insert into tbcliente (empresa, endereco, contato, cnpj)
values('$empresa', '$endereco', '$contato', $cnpj)";
$query=mysqli_query($conn,$sql);

echo "<img style='position: absolute; left: 33%; top: 10%;'src='img/batatadadosinseridoscomsucess.png'/>";
echo "<br/><a class='voltar' href='CRUDclientes.php'>Voltar</a><br/>"

?>
</body>
</html>
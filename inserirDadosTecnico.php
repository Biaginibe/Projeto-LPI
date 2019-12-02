<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoverde.css" />
    </head>
<body>
<?php
SESSION_START();
include_once 'conexao.php';

$nome=$_POST['cxnome'];
$endereco=$_POST['cxend'];
$telefone=$_POST['cxtel'];

$sql = "insert into tbtecnico (nome, endereco, telefone)
values('$nome', '$endereco', '$telefone')";
$query=mysqli_query($conn,$sql);

echo "<img style='position: absolute; left: 30%;'src='img/batatadadosinseridoscomsucess.png'/>";
echo "<br/><a class='voltar' href='homepageadm.php'>Voltar</a><br/>"

?>
</body>
</html>